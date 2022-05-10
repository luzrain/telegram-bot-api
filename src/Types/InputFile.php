<?php

namespace TelegramBot\Api\Types;

use JsonSerializable;

/**
 * This object represents the contents of a file to be uploaded.
 * Must be posted using multipart/form-data in the usual way that files are uploaded via the browser.
 */
class InputFile implements JsonSerializable
{
    private string $filePath;

    private string $uniqueName;

    private function __construct(string $filePath)
    {
        $this->filePath = $filePath;
        $this->uniqueName = uniqid('attach', true);
    }

    public static function create(string $filePath): self
    {
        return new self($filePath);
    }

    public function jsonSerialize(): mixed
    {
        return 'attach://' . $this->uniqueName;
    }

    public function getFilePath(): string
    {
        return $this->filePath;
    }

    public function getUniqueName(): string
    {
        return $this->uniqueName;
    }
}
