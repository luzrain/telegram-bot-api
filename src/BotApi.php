<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Exception\TelegramApiException;
use Luzrain\TelegramBotApi\HttpClient\RequestBuilder;
use Luzrain\TelegramBotApi\Method\GetFile;
use Luzrain\TelegramBotApi\Method\SendMediaGroup;
use Luzrain\TelegramBotApi\Type\File;
use Luzrain\TelegramBotApi\Type\InputFile;
use Luzrain\TelegramBotApi\Type\InputMediaAudio;
use Luzrain\TelegramBotApi\Type\InputMediaDocument;
use Luzrain\TelegramBotApi\Type\InputMediaPhoto;
use Luzrain\TelegramBotApi\Type\InputMediaVideo;
use Luzrain\TelegramBotApi\Type\ResponseParameters;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

/**
 * Service for execute telegram methods
 */
final class BotApi
{
    private const URL_API_ENDPOINT = 'https://api.telegram.org/bot%s/%s';
    private const URL_FILE_ENDPOINT = 'https://api.telegram.org/file/bot%s/%s';

    private RequestBuilder $requestBuilder;

    public function __construct(
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        private ClientInterface $client,
        private string $token,
    ) {
        $this->requestBuilder = new RequestBuilder($requestFactory, $streamFactory);
    }

    /**
     * Execute telergam method
     *
     * @template T
     * @psalm-param Method<T> $method
     * @psalm-return T
     */
    public function call(Method $method): Type|array|string|int|bool
    {
        $url = sprintf(self::URL_API_ENDPOINT, $this->token, $method->getName());
        $multiparts = [];
        $files = [];
        foreach ($method->iterateRequestProps() as $name => $value) {
            if ($value instanceof InputFile) {
                $content = $value->getAttachPath();
                $files[] = $value;
            } else {
                $content = is_scalar($value) ? $value : json_encode($value, JSON_UNESCAPED_UNICODE);
            }

            $multiparts[] = compact('name', 'content');

            /** @psalm-suppress TypeDoesNotContainType */
            if ($method instanceof SendMediaGroup && $name === 'media') {
                /** @var list<InputMediaAudio|InputMediaDocument|InputMediaPhoto|InputMediaVideo> $value */
                foreach ($value as $inputMedia) {
                    if ($inputMedia->media instanceof InputFile) {
                        $files[] = $inputMedia->media;
                    }
                    if (!$inputMedia instanceof InputMediaPhoto && $inputMedia->thumbnail instanceof InputFile) {
                        $files[] = $inputMedia->thumbnail;
                    }
                }
            }
        }

        foreach ($files as $file) {
            $name = $file->getUniqueName();
            $content = fopen($file->getFilePath(), 'r');
            $multiparts[] = compact('name', 'content');
        }

        $httpRequest = $multiparts === []
            ? $this->requestBuilder->create('GET', $url)
            : $this->requestBuilder->create('POST', $url, $multiparts)
        ;

        $httpResponse = $this->client->sendRequest($httpRequest);
        $response = json_decode((string) $httpResponse->getBody(), true);

        if ($response['ok'] === false) {
            $parameters = isset($response['parameters']) ? ResponseParameters::fromArray($response['parameters']) : null;
            throw new TelegramApiException($response['description'], $response['error_code'], $parameters);
        }

        if (!\is_array($response['result'])) {
            return $response['result'];
        }

        /** @var class-string<Type> $responseClass */
        $responseClass = $method->getResponseClass();

        /** @psalm-suppress InvalidReturnStatement */
        return $responseClass::fromArray($response['result']);
    }

    /**
     * Download telegram file
     *
     * @param File|string $file File object or string with fileId
     * @return string path to saved file on filesystem
     * @throws TelegramApiException
     */
    public function downloadFile(File|string $file): string
    {
        if (is_string($file)) {
            $file = $this->call(new GetFile($file));
        }

        $url = sprintf(self::URL_FILE_ENDPOINT, $this->token, $file->filePath);
        $extension = pathinfo($file->filePath, PATHINFO_EXTENSION);
        $downloadFilePath = sys_get_temp_dir() . DIRECTORY_SEPARATOR . uniqid('tg.', true) . '.' . $extension;

        $httpRequest = $this->requestBuilder->create('GET', $url);
        $httpResponse = $this->client->sendRequest($httpRequest);

        if ($httpResponse->getStatusCode() !== 200) {
            $response = json_decode($httpResponse->getBody()->getContents(), true);
            throw new TelegramApiException($response['description'], $response['error_code']);
        }

        $outStream = $httpResponse->getBody();
        $inStream = fopen($downloadFilePath, 'w');

        while (!$outStream->eof()) {
            $data = $outStream->read(1024);
            fwrite($inStream, $data);
        }

        $outStream->close();
        fclose($inStream);

        return $downloadFilePath;
    }
}
