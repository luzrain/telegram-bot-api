<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object contains information about a poll.
 */
final readonly class Poll extends Type
{
    protected function __construct(
        /**
         * Unique poll identifier
         */
        public string $id,

        /**
         * Poll question, 1-300 characters
         */
        public string $question,

        /**
         * List of poll options
         *
         * @var list<PollOption>
         */
        #[ArrayType(PollOption::class)]
        public array $options,

        /**
         * Total number of users that voted in the poll
         */
        public int $totalVoterCount,

        /**
         * True, if the poll is closed
         */
        public bool $isClosed,

        /**
         * True, if the poll is anonymous
         */
        public bool $isAnonymous,

        /**
         * Poll type, currently can be "regular" or "quiz"
         */
        public string $type,

        /**
         * True, if the poll allows multiple answers
         */
        public bool $allowsMultipleAnswers,

        /**
         * Optional. 0-based identifier of the correct answer option. Available only for polls in the quiz mode,
         * which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
         */
        public int|null $correctOptionId = null,

        /** * Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
         */
        public string|null $explanation = null,

        /**
         * Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $explanationEntities = null,

        /**
         * Optional. Amount of time in seconds the poll will be active after creation
         */
        public int|null $openPeriod = null,

        /**
         * Optional. Point in time (Unix timestamp) when the poll will be automatically closed
         */
        public int|null $closeDate = null,
    ) {
    }
}
