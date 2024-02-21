<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\PropertyType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfReactionCountType;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents reaction changes on a message with anonymous reactions.
 */
final readonly class MessageReactionCountUpdated extends Type implements TypeDenormalizable
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
        #[PropertyType(ArrayOfReactionCountType::class)]
        public array $reactions,
    ) {
    }
}
