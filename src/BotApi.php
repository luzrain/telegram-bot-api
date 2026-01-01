<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Exception\TelegramApiException;
use Luzrain\TelegramBotApi\Exception\TelegramApiServerException;
use Luzrain\TelegramBotApi\Internal\HttpClient\RequestBuilder;
use Luzrain\TelegramBotApi\Method\GetFile;
use Luzrain\TelegramBotApi\Method\SendMediaGroup;
use Luzrain\TelegramBotApi\Method\SendPaidMedia;
use Luzrain\TelegramBotApi\Type\File;
use Luzrain\TelegramBotApi\Type\InputFile;
use Luzrain\TelegramBotApi\Type\InputMedia;
use Luzrain\TelegramBotApi\Type\InputMediaAnimation;
use Luzrain\TelegramBotApi\Type\InputMediaAudio;
use Luzrain\TelegramBotApi\Type\InputMediaDocument;
use Luzrain\TelegramBotApi\Type\InputMediaPhoto;
use Luzrain\TelegramBotApi\Type\InputMediaVideo;
use Luzrain\TelegramBotApi\Type\InputPaidMediaPhoto;
use Luzrain\TelegramBotApi\Type\InputPaidMediaVideo;
use Luzrain\TelegramBotApi\Type\ResponseParameters;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Service for execute telegram methods
 */
final readonly class BotApi
{
    private const DEFAULT_API_SERVER = 'https://api.telegram.org';

    private string $server;
    private RequestBuilder $requestBuilder;

    public function __construct(
        RequestFactoryInterface $requestFactory,
        private StreamFactoryInterface $streamFactory,
        private ClientInterface $client,
        #[\SensitiveParameter]
        private string $token,
        string|null $server = null,
    ) {
        $this->server = \rtrim($server ?? self::DEFAULT_API_SERVER, '/');
        $this->requestBuilder = new RequestBuilder($requestFactory, $streamFactory);
    }

    /**
     * Execute telergam method
     *
     * @template TReturn
     * @param Method<TReturn> $method
     * @return TReturn
     * @throws TelegramApiException
     * @throws TelegramApiServerException
     */
    public function call(Method $method): mixed
    {
        $url = \sprintf('%s/bot%s/%s', $this->server, $this->token, $method->getName());
        $multiparts = [];
        $files = [];

        foreach ($method->getIterator() as $name => $value) {
            if ($value instanceof InputFile) {
                $multiparts[$name] = $value->getAttachPath();
                $files[] = $value;
            } else {
                $multiparts[$name] = \is_scalar($value) ? $value : \json_encode($value, JSON_UNESCAPED_UNICODE);
            }

            if ($value instanceof InputMedia) {
                /** @var InputMediaAnimation|InputMediaDocument|InputMediaAudio|InputMediaPhoto|InputMediaVideo $value */
                if ($value->media instanceof InputFile) {
                    $files[] = $value->media;
                }
                if (!$value instanceof InputMediaPhoto && $value->thumbnail instanceof InputFile) {
                    $files[] = $value->thumbnail;
                }
            }

            /** @psalm-suppress TypeDoesNotContainType */
            if ($method instanceof SendMediaGroup && $name === 'media') {
                /** @var list<InputMediaAnimation|InputMediaDocument|InputMediaAudio|InputMediaPhoto|InputMediaVideo> $value */
                foreach ($value as $inputMedia) {
                    if ($inputMedia->media instanceof InputFile) {
                        $files[] = $inputMedia->media;
                    }
                    if (!$inputMedia instanceof InputMediaPhoto && $inputMedia->thumbnail instanceof InputFile) {
                        $files[] = $inputMedia->thumbnail;
                    }
                }
            }

            /** @psalm-suppress TypeDoesNotContainType */
            if ($method instanceof SendPaidMedia && $name === 'media') {
                /** @var list<InputPaidMediaPhoto|InputPaidMediaVideo> $value */
                foreach ($value as $inputPaidMedia) {
                    if ($inputPaidMedia->media instanceof InputFile) {
                        $files[] = $inputPaidMedia->media;
                    }
                    if (!$inputPaidMedia instanceof InputPaidMediaPhoto && $inputPaidMedia->thumbnail instanceof InputFile) {
                        $files[] = $inputPaidMedia->thumbnail;
                    }
                }
            }
        }

        foreach ($files as $file) {
            $multiparts[$file->getUniqueName()] = $this->streamFactory->createStreamFromFile($file->getFilePath());
        }
        unset($files);

        $httpRequest = $multiparts === []
            ? $this->requestBuilder->create('GET', $url)
            : $this->requestBuilder->create('POST', $url, $multiparts)
        ;

        try {
            $httpResponse = $this->client->sendRequest($httpRequest);
        } catch (ClientExceptionInterface $e) {
            throw new TelegramApiServerException($e->getMessage(), 0, $e);
        }

        $response = \json_decode((string) $httpResponse->getBody(), true);

        if (!isset($response['ok'])) {
            throw new TelegramApiServerException($httpResponse->getStatusCode() . ' Unexpected server response');
        }

        if ($response['ok'] === false) {
            throw new TelegramApiException(
                message: $response['description'] ?? $httpResponse->getReasonPhrase(),
                code: $response['error_code'] ?? $httpResponse->getStatusCode(),
                parameters: isset($response['parameters']) ? ResponseParameters::fromArray($response['parameters']) : null,
            );
        }

        if (!isset($response['result'])) {
            throw new TelegramApiServerException($httpResponse->getStatusCode() . ' Unexpected server response');
        }

        return $method->createResponse($response['result']);
    }

    /**
     * Download telegram file
     *
     * @param File|string $file File object or fileId string
     * @throws TelegramApiException
     * @throws TelegramApiServerException
     */
    public function downloadFile(File|string $file): StreamInterface
    {
        if (\is_string($file)) {
            $file = $this->call(new GetFile($file));
        }

        $url = \sprintf('%s/file/bot%s/%s', $this->server, $this->token, $file->filePath);
        $httpRequest = $this->requestBuilder->create('GET', $url);

        try {
            $httpResponse = $this->client->sendRequest($httpRequest);
        } catch (ClientExceptionInterface $e) {
            throw new TelegramApiServerException($e->getMessage(), 0, $e);
        }

        $response = \json_decode((string) $httpResponse->getBody(), true);

        if ($httpResponse->getStatusCode() !== 200 && !isset($response['ok'])) {
            throw new TelegramApiServerException($httpResponse->getStatusCode() . ' Unexpected server response');
        }

        if ($httpResponse->getStatusCode() !== 200) {
            throw new TelegramApiException(
                message: $response['description'] ?? $httpResponse->getReasonPhrase(),
                code: $response['error_code'] ?? $httpResponse->getStatusCode(),
            );
        }

        return $httpResponse->getBody();
    }
}
