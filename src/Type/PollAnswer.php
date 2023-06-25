<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 */
final class PollAnswer extends BaseType
{
    protected function __construct(
        /**
         * Unique poll identifier
         */
        public string $pollId,

        /**
         * The user, who changed the answer to the poll
         */
        public User $user,

        /**
         * 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
         *
         * @var list<int>
         */
        public array $optionIds,
    ) {
    }
}
