<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object contains information about one answer option in a poll.
 */
final readonly class PollOption extends Type
{
    protected function __construct(
        /**
         * Unique identifier of the option, persistent on option addition and deletion
         */
        public string $persistentId,

        /**
         * Option text, 1-100 characters
         */
        public string $text,

        /**
         * Number of users who voted for this option; may be 0 if unknown
         */
        public int $voterCount,

        /**
         * Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll option texts
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $textEntities = null,

        /**
         * Optional. User who added the option; omitted if the option wasn't added by a user after poll creation
         */
        public User|null $addedByUser = null,

        /**
         * Optional. Chat that added the option; omitted if the option wasn't added by a chat after poll creation
         */
        public Chat|null $addedByChat = null,

        /**
         * Optional. Point in time (Unix timestamp) when the option was added; omitted if the option existed in the original poll
         */
        public int|null $additionDate = null,
    ) {
    }
}
