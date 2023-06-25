<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object contains information about one answer option in a poll.
 */
final class PollOption extends BaseType implements TypeInterface
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
