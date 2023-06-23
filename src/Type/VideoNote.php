<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a video message (available in Telegram apps as of v.4.0).
 */
final class VideoNote extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'file_id',
        'file_unique_id',
        'length',
        'duration',
    ];

    protected static array $map = [
        'file_id' => true,
        'file_unique_id' => true,
        'length' => true,
        'duration' => true,
        'thumbnail' => PhotoSize::class,
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
     * Video width and height (diameter of the video message) as defined by sender
     */
    protected int $length;

    /**
     * Duration of the video in seconds as defined by sender
     */
    protected int $duration;

    /**
     * Optional. Video thumbnail
     */
    protected ?PhotoSize $thumbnail = null;

    /**
     * Optional. File size in bytes
     */
    protected ?int $fileSize = null;

    public function getFileId(): string
    {
        return $this->fileId;
    }

    public function getFileUniqueId(): string
    {
        return $this->fileUniqueId;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getThumbnail(): ?PhotoSize
    {
        return $this->thumbnail;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
}
