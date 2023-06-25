<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Exception\TelegramInputFileException;

/**
 * This object represents the contents of a file to be uploaded.
 * Must be posted using multipart/form-data in the usual way that files are uploaded via the browser.
 */
final class InputFile implements \JsonSerializable
{
    private string $filePath;
    private string $uniqueName;

    private function __construct(string $filePath)
    {
        if (is_file($filePath) === false) {
            throw new TelegramInputFileException($filePath);
        }

        $this->filePath = $filePath;
        $this->uniqueName = uniqid('attach_', true);
    }

    public static function create(string $filePath): self
    {
        return new self($filePath);
    }

    public function jsonSerialize(): mixed
    {
        return $this->getAttachPath();
    }

    public function getAttachPath(): string
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
