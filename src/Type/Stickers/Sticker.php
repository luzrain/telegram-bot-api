<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Stickers;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;
use Luzrain\TelegramBotApi\Type\File;
use Luzrain\TelegramBotApi\Type\PhotoSize;

/**
 * This object represents a sticker.
 */
final class Sticker extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'file_id',
        'file_unique_id',
        'type',
        'width',
        'height',
        'is_animated',
        'is_video',
    ];

    protected static array $map = [
        'file_id' => true,
        'file_unique_id' => true,
        'type' => true,
        'width' => true,
        'height' => true,
        'is_animated' => true,
        'is_video' => true,
        'thumbnail' => PhotoSize::class,
        'emoji' => true,
        'set_name' => true,
        'premium_animation' => File::class,
        'mask_position' => MaskPosition::class,
        'custom_emoji_id' => true,
        'needs_repainting' => true,
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
     * Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”.
     * The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video.
     */
    protected string $type;

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
    protected ?PhotoSize $thumbnail = null;

    /**
     * Optional. Emoji associated with the sticker
     */
    protected ?string $emoji = null;

    /**
     * Optional. Name of the sticker set to which the sticker belongs
     */
    protected ?string $setName = null;

    /**
     * Optional. For premium regular stickers, premium animation for the sticker
     */
    protected ?File $premiumAnimation = null;

    /**
     * Optional. For mask stickers, the position where the mask should be placed
     */
    protected ?MaskPosition $maskPosition = null;

    /**
     * Optional. For custom emoji stickers, unique identifier of the custom emoji
     */
    protected ?string $customEmojiId = null;

    /**
     * Optional. True, if the sticker must be repainted to a text color in messages,
     * the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
     */
    protected ?bool $needsRepainting = null;

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

    public function getType(): string
    {
        return $this->type;
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

    public function getThumbnail(): ?PhotoSize
    {
        return $this->thumbnail;
    }

    public function getEmoji(): ?string
    {
        return $this->emoji;
    }

    public function getSetName(): ?string
    {
        return $this->setName;
    }

    public function getPremiumAnimation(): ?File
    {
        return $this->premiumAnimation;
    }

    public function getMaskPosition(): ?MaskPosition
    {
        return $this->maskPosition;
    }

    public function getCustomEmojiId(): ?string
    {
        return $this->customEmojiId;
    }

    public function getNeedsRepainting(): ?bool
    {
        return $this->needsRepainting;
    }

    public function fileSize(): ?int
    {
        return $this->fileSize;
    }
}
