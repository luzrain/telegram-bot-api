<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
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
         * True, if the poll allows to change the chosen answer options
         */
        public bool|null $allowsRevoting = null,

        /**
         * True if voting is limited to users who have been members of the chat where the poll was originally sent for more than 24 hours
         */
        public bool|null $membersOnly = null,

        /**
         * Optional. Special entities that appear in the question. Currently, only custom emoji entities are allowed in poll questions
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $questionEntities = null,

        /**
         * Optional. A list of two-letter ISO 3166-1 alpha-2 country codes indicating the countries from which users can vote in the poll.
         * The country code "FT" is used for users with anonymous numbers. If omitted, then users from any country can participate in the poll.
         *
         * @var list<string>|null
         */
        public array|null $countryCodes = null,

        /**
         * @deprecated replaced by $correctOptionIds
         */
        public int|null $correctOptionId = null,

        /**
         * Optional. 0-based identifiers of the correct answer options. Available only for polls in the quiz mode,
         * which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
         *
         * @var list<int>|null
         */
        public array|null $correctOptionIds = null,

        /**
         * Optional. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
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
         * Optional. Media added to the quiz explanation
         */
        public PollMedia|null $explanationMedia = null,

        /**
         * Optional. Amount of time in seconds the poll will be active after creation
         */
        public int|null $openPeriod = null,

        /**
         * Optional. Point in time (Unix timestamp) when the poll will be automatically closed
         */
        public int|null $closeDate = null,

        /**
         * Optional. Description of the poll; for polls inside the Message object only
         */
        public string|null $description = null,

        /**
         * Optional. Special entities like usernames, URLs, bot commands, etc. that appear in the description
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $descriptionEntities = null,

        /**
         * Optional. Media attached to the poll question
         */
        public PollMedia|null $media = null,
    ) {
    }
}
