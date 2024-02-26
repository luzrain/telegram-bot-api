<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a change of a reaction on a message performed by a user.
 */
final readonly class MessageReactionUpdated extends Type
{
    protected function __construct(
        /**
         * The chat containing the message the user reacted to
         */
        public Chat $chat,

        /**
         * Unique identifier of the message inside the chat
         */
        public int $messageId,

        /**
         * Date of the change in Unix time
         */
        public int $date,

        /**
         * Previous list of reaction types that were set by the user
         *
         * @var list<ReactionType>
         */
        #[ArrayType(ReactionType::class)]
        public array $oldReaction,

        /**
         * New list of reaction types that have been set by the user
         *
         * @var list<ReactionType>
         */
        #[ArrayType(ReactionType::class)]
        public array $newReaction,

        /**
         * Optional. The user that changed the reaction, if the user isn't anonymous
         */
        public User|null $from = null,

        /**
         * Optional. The chat on behalf of which the reaction was changed, if the user is anonymous
         */
        public Chat|null $actorChat = null,
    ) {
    }
}
