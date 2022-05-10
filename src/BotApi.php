<?php

namespace TelegramBot\Api;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ClientException;
use TelegramBot\Api\Exceptions\TelegramException;
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

    public function call(BaseMethod $method): BaseType
    {
        $url = \sprintf(self::URL_API_ENDPOINT, $this->token, $method->getMethodName());
        $options = [];
        $multipart = [];

        foreach ($method->getRequest() as $name => $data) {
            $contents = \is_scalar($data) ? $data : \json_encode($data);
            $multipart[] = compact('name', 'contents');
        }

        if ($multipart !== []) {
            $options['multipart'] = $multipart;
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
