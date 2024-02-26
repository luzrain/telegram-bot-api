<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object represents reaction changes on a message with anonymous reactions.
 */
final readonly class MessageReactionCountUpdated extends Type
{
    protected function __construct(
        /**
         * The chat containing the message
         */
        public Chat $chat,

        /**
         * Unique message identifier inside the chat
         */
        public int $messageId,

        /**
         * Date of the change in Unix time
         */
        public int $date,

        /**
         * List of reactions that are present on the message
         *
         * @var list<ReactionCount>
         */
        #[ArrayType(ReactionCount::class)]
        public array $reactions,
    ) {
    }
}
