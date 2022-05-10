<?php

namespace TelegramBot\Api\Types\Stickers;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
use TelegramBot\Api\Types\Arrays\ArrayOfStickers;
use TelegramBot\Api\Types\PhotoSize;

/**
 * This object represents a sticker set.
 */
class StickerSet extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'name',
        'title',
        'is_animated',
        'is_video',
        'contains_masks',
        'stickers',
    ];

    protected static array $map = [
        'name' => true,
        'title' => true,
        'is_animated' => true,
        'is_video' => true,
        'contains_masks' => true,
        'stickers' => ArrayOfStickers::class,
        'thumb' => PhotoSize::class,
    ];

    /**
     * Sticker set name
     */
    protected string $name;

    /**
     * Sticker set title
     */
    protected string $title;

    /**
     * True, if the sticker set contains animated stickers
     */
    protected bool $isAnimated;

    /**
     * True, if the sticker set contains video stickers
     */
    protected bool $isVideo;

    /**
     * True, if the sticker set contains masks
     */
    protected bool $containsMasks;

    /**
     * List of all set stickers
     *
     * @var Sticker[]
     */
    protected array $stickers;

    /**
     * Optional. Sticker thumbnail in the .WEBP or .JPG format
     */
    protected ?PhotoSize $thumb = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isAnimated(): bool
    {
        return $this->isAnimated;
    }

    public function isVideo(): bool
    {
        return $this->isVideo;
    }

    public function isContainsMasks(): bool
    {
        return $this->containsMasks;
    }

    public function getStickers(): array
    {
        return $this->stickers;
    }

    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }
}
