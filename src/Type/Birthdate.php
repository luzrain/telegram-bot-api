<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes the birthdate of a user.
 */
final readonly class Birthdate extends Type
{
    protected function __construct(
        /**
         * Day of the user's birth; 1-31
         */
        public int $day,

        /**
         * Month of the user's birth; 1-12
         */
        public int $month,

        /**
         * Optional. Year of the user's birth
         */
        public int|null $year = null,
    ) {
    }
}
