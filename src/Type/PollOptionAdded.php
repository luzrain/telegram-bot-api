<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * Describes a service message about an option added to a poll.
 */
final readonly class PollOptionAdded extends Type
{
    protected function __construct(
        /**
         * Unique identifier of the added option
         */
        public string $optionPersistentId,

        /**
         * Option text
         */
        public string $optionText,

        /**
         * Optional. Message containing the poll to which the option was added, if known.
         * Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
         */
        public MaybeInaccessibleMessage|null $pollMessage = null,

        /**
         * Optional. Special entities that appear in the option_text
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $optionTextEntities = null,
    ) {
    }
}
