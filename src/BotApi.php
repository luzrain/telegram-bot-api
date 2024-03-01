<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Exception\TelegramApiException;
use Luzrain\TelegramBotApi\Internal\HttpClient\RequestBuilder;
use Luzrain\TelegramBotApi\Method\GetFile;
use Luzrain\TelegramBotApi\Method\SendMediaGroup;
use Luzrain\TelegramBotApi\Type\File;
use Luzrain\TelegramBotApi\Type\InputFile;
use Luzrain\TelegramBotApi\Type\InputMediaAudio;
use Luzrain\TelegramBotApi\Type\InputMediaDocument;
use Luzrain\TelegramBotApi\Type\InputMediaPhoto;
use Luzrain\TelegramBotApi\Type\InputMediaVideo;
use Luzrain\TelegramBotApi\Type\ResponseParameters;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;

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
        private StreamFactoryInterface $streamFactory,
        private ClientInterface $client,
        private string $token,
    ) {
        $this->requestBuilder = new RequestBuilder($requestFactory, $streamFactory);
    }

    /**
     * Execute telergam method
     *
     * @template TReturn of Type|list<Type>|list<list<Type>>|int|string|bool
     * @param Method<TReturn> $method
     * @return TReturn
     * @throws TelegramApiException
     * @throws ClientExceptionInterface
     */
    public function call(Method $method): Type|array|int|string|bool
    {
        $url = \sprintf(self::URL_API_ENDPOINT, $this->token, $method->getName());
        $multiparts = [];
        $files = [];

        foreach ($method->getIterator() as $name => $value) {
            if ($value instanceof InputFile) {
                $multiparts[$name] = $value->getAttachPath();
                $files[] = $value;
            } else {
                $multiparts[$name] = \is_scalar($value) ? $value : \json_encode($value, JSON_UNESCAPED_UNICODE);
            }

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
            $multiparts[$file->getUniqueName()] = $this->streamFactory->createStreamFromFile($file->getFilePath());
        }
        unset($files);

        $httpRequest = empty($multiparts)
            ? $this->requestBuilder->create('GET', $url)
            : $this->requestBuilder->create('POST', $url, $multiparts)
        ;

        $httpResponse = $this->client->sendRequest($httpRequest);
        $response = \json_decode((string) $httpResponse->getBody(), true);

        if ($response['ok'] === false) {
            $parameters = isset($response['parameters']) ? ResponseParameters::fromArray($response['parameters']) : null;
            throw new TelegramApiException($response['description'], $response['error_code'], $parameters);
        }

        return $method->createResponse($response['result']);
    }

    /**
     * Download telegram file
     *
     * @param File|string $file File object or string with fileId
     * @throws TelegramApiException
     * @throws ClientExceptionInterface
     */
    public function downloadFile(File|string $file): StreamInterface
    {
        if (\is_string($file)) {
            $file = $this->call(new GetFile($file));
        }

        $url = \sprintf(self::URL_FILE_ENDPOINT, $this->token, $file->filePath);
        $httpRequest = $this->requestBuilder->create('GET', $url);
        $httpResponse = $this->client->sendRequest($httpRequest);

        if ($httpResponse->getStatusCode() !== 200) {
            $response = \json_decode((string) $httpResponse->getBody(), true);
            throw new TelegramApiException($response['description'], $response['error_code']);
        }

        return $httpResponse->getBody();
    }
}
