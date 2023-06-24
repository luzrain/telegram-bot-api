<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 */
final class Document extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'file_id',
        'file_unique_id',
    ];

    protected static array $map = [
        'file_id' => true,
        'file_unique_id' => true,
        'thumbnail' => PhotoSize::class,
        'file_name' => true,
        'mime_type' => true,
        'file_size' => true,
    ];

    /**
     * Identifier for this file, which can be used to download or reuse the file
     */
    protected string $fileId;

    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots.
     * Can't be used to download or reuse the file.
     */
    protected string $fileUniqueId;

    /**
     * Optional. Document thumbnail as defined by sender
     */
    protected PhotoSize|null $thumbnail = null;

    /**
     * Optional. Original filename as defined by sender
     */
    protected string|null $fileName = null;

    /**
     * Optional. MIME type of the file as defined by sender
     */
    protected string|null $mimeType = null;

    /**
     * Optional. File size in bytes
     */
    protected int|null $fileSize = null;

    public function getFileId(): string
    {
        return $this->fileId;
    }

    public function getFileUniqueId(): string
    {
        return $this->fileUniqueId;
    }

    public function getThumbnail(): PhotoSize|null
    {
        return $this->thumbnail;
    }

    public function getFileName(): string|null
    {
        return $this->fileName;
    }

    public function getMimeType(): string|null
    {
        return $this->mimeType;
    }

    public function getFileSize(): int|null
    {
        return $this->fileSize;
    }
}