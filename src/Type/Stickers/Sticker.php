<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Stickers;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\File;
use Luzrain\TelegramBotApi\Type\PhotoSize;

/**
 * This object represents a sticker.
 */
final readonly class Sticker extends Type
{
    protected function __construct(
        /**
         * Identifier for this file, which can be used to download or reuse the file
         */
        public string $fileId,

        /**
         * Unique identifier for this file, which is supposed to be the same over time and for different bots.
         * Can't be used to download or reuse the file.
         */
        public string $fileUniqueId,

        /**
         * Type of the sticker, currently one of "regular", "mask", "custom_emoji".
         * The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video.
         */
        public string $type,

        /**
         * Sticker width
         */
        public int $width,

        /**
         * Sticker height
         */
        public int $height,

        /**
         * True, if the sticker is animated
         */
        public bool $isAnimated,

        /**
         * True, if the sticker is a video sticker
         */
        public bool $isVideo,

        /**
         * Optional. Sticker thumbnail in the .WEBP or .JPG format
         */
        public PhotoSize|null $thumbnail = null,

        /**
         * Optional. Emoji associated with the sticker
         */
        public string|null $emoji = null,

        /**
         * Optional. Name of the sticker set to which the sticker belongs
         */
        public string|null $setName = null,

        /**
         * Optional. For premium regular stickers, premium animation for the sticker
         */
        public File|null $premiumAnimation = null,

        /**
         * Optional. For mask stickers, the position where the mask should be placed
         */
        public MaskPosition|null $maskPosition = null,

        /**
         * Optional. For custom emoji stickers, unique identifier of the custom emoji
         */
        public string|null $customEmojiId = null,

        /**
         * Optional. True, if the sticker must be repainted to a text color in messages,
         * the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places
         */
        public true|null $needsRepainting = null,

        /**
         * Optional. File size in bytes
         */
        public int|null $fileSize = null,
    ) {
    }
}
