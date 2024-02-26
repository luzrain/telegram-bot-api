<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 */
final readonly class PollAnswer extends Type
{
    protected function __construct(
        /**
         * Unique poll identifier
         */
        public string $pollId,

        /**
         * 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
         *
         * @var list<int>
         */
        public array $optionIds,

        /**
         * Optional. The chat that changed the answer to the poll, if the voter is anonymous
         */
        public Chat|null $voterChat = null,

        /**
         * Optional. The user that changed the answer to the poll, if the voter isn't anonymous
         */
        public User|null $user = null,
    ) {
    }
}
