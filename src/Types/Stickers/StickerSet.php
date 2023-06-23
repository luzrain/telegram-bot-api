<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Stickers;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;
use Luzrain\TelegramBotApi\Types\Arrays\ArrayOfStickers;
use Luzrain\TelegramBotApi\Types\PhotoSize;

/**
 * This object represents a sticker set.
 */
final class StickerSet extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'name',
        'title',
        'sticker_type',
        'is_animated',
        'is_video',
        'stickers',
    ];

    protected static array $map = [
        'name' => true,
        'title' => true,
        'sticker_type' => true,
        'is_animated' => true,
        'is_video' => true,
        'stickers' => ArrayOfStickers::class,
        'thumbnail' => PhotoSize::class,
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
     * Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
     */
    protected string $stickerType;

    /**
     * True, if the sticker set contains animated stickers
     */
    protected bool $isAnimated;

    /**
     * True, if the sticker set contains video stickers
     */
    protected bool $isVideo;

    /**
     * List of all set stickers
     *
     * @var Sticker[]
     */
    protected array $stickers;

    /**
     * Optional. Sticker thumbnail in the .WEBP or .JPG format
     */
    protected ?PhotoSize $thumbnail = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getStickerType(): string
    {
        return $this->stickerType;
    }

    public function isAnimated(): bool
    {
        return $this->isAnimated;
    }

    public function isVideo(): bool
    {
        return $this->isVideo;
    }

    /**
     * @return Sticker[]
     */
    public function getStickers(): array
    {
        return $this->stickers;
    }

    public function getThumbnail(): ?PhotoSize
    {
        return $this->thumbnail;
    }
}
