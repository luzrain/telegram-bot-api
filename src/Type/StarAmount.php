<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes an amount of Telegram Stars.
 */
final readonly class StarAmount extends Type
{
    protected function __construct(
        /**
         * Integer amount of Telegram Stars, rounded to 0; can be negative
         */
        public int $amount,

        /**
         * Optional. The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999; can be negative if and only if amount is non-positive
         */
        public int|null $nanostarAmount = null,
    ) {
    }
}
