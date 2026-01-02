<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the rating of a user based on their Telegram Star spendings.
 */
final readonly class UserRating extends Type
{
    protected function __construct(
        /**
         * Current level of the user, indicating their reliability when purchasing digital goods and services.
         * A higher level suggests a more trustworthy customer; a negative level is likely reason for concern.
         */
        public int $level,

        /**
         * Numerical value of the user's rating; the higher the rating, the better
         */
        public int $rating,

        /**
         * The rating value required to get the current level
         */
        public int $currentLevelRating,

        /**
         * Optional. The rating value required to get to the next level; omitted if the maximum level was reached
         */
        public int|null $nextLevelRating = null,
    ) {
    }
}
