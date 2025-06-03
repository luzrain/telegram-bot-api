<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the backdrop of a unique gift.
 */
final readonly class UniqueGiftBackdrop extends Type
{
    public function __construct(
        /**
         * Name of the backdrop
         */
        public string $name,

        /**
         * Colors of the backdrop
         */
        public UniqueGiftBackdropColors $colors,

        /**
         * The number of unique gifts that receive this backdrop for every 1000 gifts upgraded
         */
        public int $rarityPerMille,
    ) {
    }
}
