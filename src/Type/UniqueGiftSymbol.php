<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Stickers\Sticker;

/**
 * This object describes the symbol shown on the pattern of a unique gift.
 */
final readonly class UniqueGiftSymbol extends Type
{
    public function __construct(
        /**
         * Name of the symbol
         */
        public string $name,

        /**
         * The sticker that represents the unique gift
         */
        public Sticker $sticker,

        /**
         * The number of unique gifts that receive this model for every 1000 gifts upgraded
         */
        public int $rarityPerMille,
    ) {
    }
}
