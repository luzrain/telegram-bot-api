<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object contains information about one answer option in a poll.
 */
final readonly class PollOption extends Type
{
    protected function __construct(
        /**
         * Option text, 1-100 characters
         */
        public string $text,

        /**
         * Number of users that voted for this option
         */
        public int $voterCount,
    ) {
    }
}
