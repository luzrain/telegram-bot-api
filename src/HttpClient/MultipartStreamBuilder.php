<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\HttpClient;

use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;

/**
 * @internal
 */
final class MultipartStreamBuilder
{
    private StreamFactoryInterface $streamFactory;
    private ApacheMimetypeHelper $mimetypeHelper;

    private string $boundary = '';
    private array $data = [];

    public function __construct(StreamFactoryInterface $streamFactory)
    {
        $this->streamFactory = $streamFactory;
        $this->mimetypeHelper = new ApacheMimetypeHelper();
    }

    /**
     * Add a resource to the Multipart Stream.
     *
     * @param string $name the formpost name
     * @param string|resource|StreamInterface $resource
     */
    public function addResource(string $name, mixed $resource, array $options = []): self
    {
        $stream = $this->createStream($resource);

        if (!isset($options['headers'])) {
            $options['headers'] = [];
        }

        // Try to add filename if it is missing
        if (empty($options['filename'])) {
            $options['filename'] = null;
            $uri = $stream->getMetadata('uri');
            if (is_string($uri) && !str_starts_with($uri, 'php://') && !str_starts_with($uri, 'data://')) {
                $options['filename'] = $uri;
            }
        }

        /** @var array{headers: array, filename: string} $options */
        $this->prepareHeaders($name, $stream, $options['filename'], $options['headers']);

        return $this->addData($stream, $options['headers']);
    }

    /**
     * Add a resource to the Multipart Stream.
     *
     * @param string|resource|StreamInterface $resource the filepath, resource or StreamInterface of the data
     * @param array $headers  additional headers array: ['header-name' => 'header-value']
     */
    public function addData(mixed $resource, array $headers = []): self
    {
        $stream = $this->createStream($resource);
        $this->data[] = ['contents' => $stream, 'headers' => $headers];

        return $this;
    }

    private function createStream(mixed $resource): StreamInterface
    {
        return match (true) {
            $resource instanceof StreamInterface => $resource,
            is_string($resource), is_int($resource), is_bool($resource) => $this->streamFactory->createStream((string) $resource),
            is_resource($resource) => $this->streamFactory->createStreamFromResource($resource),
            default => throw new \InvalidArgumentException(
                sprintf('First argument to "%s" must be a string, resource or StreamInterface. %s given.', __METHOD__, get_debug_type($resource))
            ),
        };
    }

    /**
     * Add extra headers if they are missing.
     */
    private function prepareHeaders(string $name, StreamInterface $stream, string|null $filename, array &$headers): void
    {
        // Set a default content-disposition header if one was not provided
        if (!$this->hasHeader($headers, 'content-disposition')) {
            $headers['Content-Disposition'] = sprintf('form-data; name="%s"', $name);
            if ($filename !== null) {
                $headers['Content-Disposition'] .= sprintf('; filename="%s"', \basename($filename));
            }
        }

        // Set a default content-length header if one was not provided
        if (!$this->hasHeader($headers, 'content-length')) {
            if ($length = $stream->getSize()) {
                $headers['Content-Length'] = (string) $length;
            }
        }

        // Set a default Content-Type if one was not provided
        if (!$this->hasHeader($headers, 'content-type') && $filename !== null) {
            if ($type = $this->mimetypeHelper->getMimetypeFromFilename($filename)) {
                $headers['Content-Type'] = $type;
            }
        }
    }

    public function build(): StreamInterface
    {
        // Open a temporary read-write stream as buffer.
        // If the size is less than predefined limit, things will stay in memory.
        // If the size is more than that, things will be stored in temp file.
        $buffer = fopen('php://temp', 'r+');
        foreach ($this->data as $data) {
            // Add start and headers
            fwrite($buffer, "--{$this->getBoundary()}\r\n" . $this->getHeaders($data['headers'])."\r\n");

            /** @var StreamInterface $contentStream */
            $contentStream = $data['contents'];

            // Read stream into buffer
            if ($contentStream->isSeekable()) {
                $contentStream->rewind(); // rewind to beginning
            }
            if ($contentStream->isReadable()) {
                while (!$contentStream->eof()) {
                    // Read 1MB chunk into buffer until reached EOF
                    fwrite($buffer, $contentStream->read(1048576));
                }
            } else {
                fwrite($buffer, $contentStream->__toString());
            }
            fwrite($buffer, "\r\n");
        }

        // Append end
        fwrite($buffer, "--{$this->getBoundary()}--\r\n");

        // Rewind to starting position for reading.
        fseek($buffer, 0);

        return $this->createStream($buffer);
    }

    /**
     * Get the headers formatted for the HTTP message.
     */
    private function getHeaders(array $headers): string
    {
        $str = '';
        foreach ($headers as $key => $value) {
            $str .= sprintf("%s: %s\r\n", $key, $value);
        }

        return $str;
    }

    private function hasHeader(array $headers, string $key): bool
    {
        $lowercaseHeader = strtolower($key);
        foreach ($headers as $k => $v) {
            if (strtolower($k) === $lowercaseHeader) {
                return true;
            }
        }

        return false;
    }

    public function getBoundary(): string
    {
        if ($this->boundary === '') {
            $this->boundary = uniqid('', true);
        }

        return $this->boundary;
    }

    public function reset(): void
    {
        $this->data = [];
        $this->boundary = '';
    }
}
