<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Exception\TelegramInputFileException;

/**
 * This object represents the contents of a file to be uploaded.
 * Must be posted using multipart/form-data in the usual way that files are uploaded via the browser.
 */
final readonly class InputFile implements \JsonSerializable
{
    private string $filePath;
    private string $uniqueName;

    public function __construct(string $filePath)
    {
        if (\is_file($filePath) === false) {
            throw new TelegramInputFileException($filePath);
        }

        $this->filePath = $filePath;
        $this->uniqueName = \uniqid('attach.', true);
    }

    public function getFilePath(): string
    {
        return $this->filePath;
    }

    public function getUniqueName(): string
    {
        return $this->uniqueName;
    }

    public function getAttachPath(): string
    {
        return 'attach://' . $this->uniqueName;
    }

    public function jsonSerialize(): string
    {
        return $this->getAttachPath();
    }
}
