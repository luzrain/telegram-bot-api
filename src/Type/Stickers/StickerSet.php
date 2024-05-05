<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Stickers;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\PhotoSize;

/**
 * This object represents a sticker set.
 */
final readonly class StickerSet extends Type
{
    protected function __construct(
        /**
         * Sticker set name
         */
        public string $name,

        /**
         * Sticker set title
         */
        public string $title,

        /**
         * Type of stickers in the set, currently one of "regular", "mask", "custom_emoji"
         */
        public string $stickerType,

        /**
         * List of all set stickers
         *
         * @var list<Sticker>
         */
        #[ArrayType(Sticker::class)]
        public array $stickers,

        /**
         * Optional. Sticker thumbnail in the .WEBP or .JPG format
         */
        public PhotoSize|null $thumbnail = null,
    ) {
    }
}
