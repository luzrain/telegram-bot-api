<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\HttpClient;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;

/**
 * @internal
 */
final class RequestBuilder
{
    private MultipartStreamBuilder $multipartStreamBuilder;

    public function __construct(
        private RequestFactoryInterface $requestFactory,
        private StreamFactoryInterface $streamFactory,
    ) {
        $this->multipartStreamBuilder = new MultipartStreamBuilder($this->streamFactory);
    }

    public function create(string $method, string $uri, array|string $body = '', array $headers = []): RequestInterface
    {
        if (is_string($body)) {
            return $this->doCreateRequest($method, $uri, $headers, $this->streamFactory->createStream($body));
        }

        foreach ($body as $item) {
            $name = $item['name'];
            $content = $item['content'];
            unset($item['name'], $item['content']);
            $this->multipartStreamBuilder->addResource($name, $content, $item);
        }

        $multipartStream = $this->multipartStreamBuilder->build();
        $boundary = $this->multipartStreamBuilder->getBoundary();
        $this->multipartStreamBuilder->reset();

        $headers['Content-Type'] = sprintf('multipart/form-data; boundary="%s"', $boundary);

        return $this->doCreateRequest($method, $uri, $headers, $multipartStream);
    }

    private function doCreateRequest(string $method, string $uri, array $headers, StreamInterface $stream): RequestInterface
    {
        $request = $this->requestFactory->createRequest($method, $uri);
        $request = $request->withBody($stream);
        foreach ($headers as $name => $value) {
            $request = $request->withAddedHeader($name, $value);
        }

        return $request;
    }
}
