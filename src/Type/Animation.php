<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 */
final class Animation extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'file_id',
        'file_unique_id',
        'width',
        'height',
        'duration',
    ];

    protected static array $map = [
        'file_id' => true,
        'file_unique_id' => true,
        'width' => true,
        'height' => true,
        'duration' => true,
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
     * Video width as defined by sender
     */
    protected int $width;

    /**
     * Video height as defined by sender
     */
    protected int $height;

    /**
     * Duration of the video in seconds as defined by sender
     */
    protected int $duration;

    /**
     * Optional. Animation thumbnail as defined by sender
     */
    protected ?PhotoSize $thumbnail = null;

    /**
     * Optional. Original animation filename as defined by sender
     */
    protected ?string $fileName = null;

    /**
     * Optional. MIME type of the file as defined by sender
     */
    protected ?string $mimeType = null;

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

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getThumbnail(): ?PhotoSize
    {
        return $this->thumbnail;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }
}
