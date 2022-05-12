<?php

namespace TelegramBot\Api;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ClientException;
use TelegramBot\Api\Exceptions\TelegramException;
use TelegramBot\Api\Methods\SendMediaGroup;
use TelegramBot\Api\Types\InputFile;
use TelegramBot\Api\Types\InputMediaAnimation;
use TelegramBot\Api\Types\InputMediaAudio;
use TelegramBot\Api\Types\InputMediaDocument;
use TelegramBot\Api\Types\InputMediaVideo;
use TelegramBot\Api\Types\ResponseParameters;

/**
 * 
 */
class BotApi
{
    // Url prefixes
    private const URL_API_ENDPOINT = 'https://api.telegram.org/bot%s/%s';

    // Url prefix for files
    private const URL_FILE_ENDPOINT = 'https://api.telegram.org/file/bot%s/%s';

    // Bot token
    private string $token;

    // Http Client
    private HttpClient $httpClient;

    public function __construct(string $token, array $options = [])
    {
        $this->token = $token;
        $this->httpClient = new HttpClient($options);
    }

    /**
     * Execute telergam method
     *
     * @param BaseMethod $method
     * @return BaseType|array|string|int|bool
     * @throws TelegramException
     */
    public function call(BaseMethod $method): BaseType|array|string|int|bool
    {
        $url = sprintf(self::URL_API_ENDPOINT, $this->token, $method->getMethodName());
        $options = [];
        $multiparts = [];
        $files = [];

        foreach ($method->getRequest() as $name => $data) {
            if ($data instanceof InputFile) {
                $files[] = $data;
                $contents = $data->getAttachPath();
            } else {
                $contents = \is_scalar($data) ? $data : \json_encode($data);
            }

            if ($method instanceof SendMediaGroup && $name === 'media') {
                foreach ($data as $inputMedia) {
                    $files[] = $inputMedia->getMedia();
                    if ($inputMedia instanceof InputMediaAudio ||
                        $inputMedia instanceof InputMediaDocument ||
                        $inputMedia instanceof InputMediaVideo ||
                        $inputMedia instanceof InputMediaAnimation
                    ) {
                        if ($inputMedia->getThumb() instanceof InputFile) {
                            $files[] = $inputMedia->getThumb();
                        }
                    }
                }
            }

            $multiparts[] = compact('name', 'contents');
        }

        if ($multiparts !== []) {
            $options['multipart'] = $multiparts;
        }

        foreach ($files as $file) {
            $name = $file->getUniqueName();
            $contents = \fopen($file->getFilePath(), 'r');
            $options['multipart'][] = compact('name', 'contents');
        }

        try {
            $httpResponse = $this->httpClient->request('POST', $url, $options);
        } catch (ClientException $exception) {
            $httpResponse = $exception->getResponse();
        }

        $response = \json_decode($httpResponse->getBody(), true);

        if ($response['ok'] === false) {
            $parameters = isset($response['parameters']) ? ResponseParameters::fromResponse($response['parameters']) : null;
            throw new TelegramException($response['description'], $response['error_code'], $exception, $parameters);
        }

        return $method->createResponse($response['result']);
    }
}
