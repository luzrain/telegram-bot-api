<?php

namespace TelegramBot\Api\Types\Stickers;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
use TelegramBot\Api\Types\PhotoSize;

/**
 * This object represents a sticker.
 */
class Sticker extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'file_id',
        'file_unique_id',
        'width',
        'height',
        'is_animated',
        'is_video',
    ];

    protected static array $map = [
        'file_id' => true,
        'file_unique_id' => true,
        'width' => true,
        'height' => true,
        'is_animated' => true,
        'is_video' => true,
        'thumb' => PhotoSize::class,
        'emoji' => true,
        'set_name' => true,
        'mask_position' => MaskPosition::class,
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
     * Sticker width
     */
    protected int $width;

    /**
     * Sticker height
     */
    protected int $height;

    /**
     * True, if the sticker is animated
     */
    protected bool $isAnimated;

    /**
     * True, if the sticker is a video sticker
     */
    protected bool $isVideo;

    /**
     * Optional. Sticker thumbnail in the .WEBP or .JPG format
     */
    protected ?PhotoSize $thumb = null;

    /**
     * Optional. Emoji associated with the sticker
     */
    protected ?string $emoji = null;

    /**
     * Optional. Name of the sticker set to which the sticker belongs
     */
    protected ?string $setName = null;

    /**
     * Optional. For mask stickers, the position where the mask should be placed
     */
    protected ?MaskPosition $maskPosition = null;

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

    public function isAnimated(): bool
    {
        return $this->isAnimated;
    }

    public function isVideo(): bool
    {
        return $this->isVideo;
    }

    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }

    public function getEmoji(): ?string
    {
        return $this->emoji;
    }

    public function getSetName(): ?string
    {
        return $this->setName;
    }

    public function getMaskPosition(): ?MaskPosition
    {
        return $this->maskPosition;
    }

    public function isFileSize(): ?bool
    {
        return $this->fileSize;
    }
}
