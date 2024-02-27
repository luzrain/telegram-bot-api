<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Internal\HttpClient;

use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;

/**
 * @internal
 */
final class MultipartStreamBuilder
{
    private string|null $boundary = null;
    private array $data = [];

    public function __construct(private readonly StreamFactoryInterface $streamFactory)
    {
    }

    public function addResource(string $name, string|int|bool|float|StreamInterface $resource): self
    {
        $stream = $this->createStream($resource);
        $headers = [];
        $headers['Content-Disposition'] = \sprintf('form-data; name="%s"', $name);

        $uri = $stream->getMetadata('uri');
        $filename = \is_string($uri) && !\str_starts_with($uri, 'php://') && !\str_starts_with($uri, 'data://') ? $uri : null;
        if ($filename !== null) {
            $headers['Content-Disposition'] .= \sprintf('; filename="%s"', \basename($filename));
        }

        $this->data[] = ['contents' => $stream, 'headers' => $headers];

        return $this;
    }

    public function build(): StreamInterface
    {
        $buffer = \fopen('php://temp', 'r+');
        foreach ($this->data as ['headers' => $headers, 'contents' => $contentStream]) {
            /** @var StreamInterface $contentStream */

            \fwrite($buffer, "--{$this->getBoundary()}\r\n");
            foreach ($headers as $key => $value) {
                \fwrite($buffer, $key . ': ' . $value . "\r\n");
            }
            \fwrite($buffer, "\r\n");

            if ($contentStream->isSeekable()) {
                $contentStream->rewind();
            }

            if ($contentStream->isReadable()) {
                while (!$contentStream->eof()) {
                    \fwrite($buffer, $contentStream->read(1048576));
                }
            } else {
                \fwrite($buffer, (string) $contentStream);
            }

            \fwrite($buffer, "\r\n");
        }

        \fwrite($buffer, "--{$this->getBoundary()}--\r\n");
        \rewind($buffer);

        return $this->createStream($buffer);
    }

    public function getBoundary(): string
    {
        return $this->boundary ??= \uniqid('', true);
    }

    public function reset(): void
    {
        $this->boundary = null;
        $this->data = [];
    }

    private function createStream(mixed $resource): StreamInterface
    {
        return match (true) {
            $resource instanceof StreamInterface => $resource,
            \is_scalar($resource) => $this->streamFactory->createStream((string) $resource),
            \is_resource($resource) => $this->streamFactory->createStreamFromResource($resource),
            default => throw new \InvalidArgumentException(
                \sprintf('First argument to "%s" must be a scalar, resource or StreamInterface. %s given.', __METHOD__, \get_debug_type($resource)),
            ),
        };
    }
}
