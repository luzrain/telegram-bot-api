<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Stickers;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\PropertyType;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfStickersType;
use Luzrain\TelegramBotApi\Type\PhotoSize;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a sticker set.
 */
final readonly class StickerSet extends Type implements TypeDenormalizable
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
         * Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”
         */
        public string $stickerType,

        /**
         * True, if the sticker set contains animated stickers
         */
        public bool $isAnimated,

        /**
         * True, if the sticker set contains video stickers
         */
        public bool $isVideo,

        /**
         * List of all set stickers
         *
         * @var list<Sticker>
         */
        #[PropertyType(ArrayOfStickersType::class)]
        public array $stickers,

        /**
         * Optional. Sticker thumbnail in the .WEBP or .JPG format
         */
        public PhotoSize|null $thumbnail = null,
    ) {
    }
}
