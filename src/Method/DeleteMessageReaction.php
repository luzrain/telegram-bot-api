<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to remove a reaction from a message in a group or a supergroup chat. The bot must have the 'can_delete_messages' administrator right in the chat.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class DeleteMessageReaction extends Method
{
    protected static string $methodName = 'deleteMessageReaction';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup in the format @username
         */
        protected int|string $chatId,

        /**
         * Identifier of the target message
         */
        protected int $messageId,

        /**
         * Identifier of the user whose reaction will be removed, if the reaction was added by a user
         */
        protected int|null $userId = null,

        /**
         * Identifier of the chat whose reaction will be removed, if the reaction was added by a chat
         */
        protected int|null $actorChatId = null,
    ) {
    }
}
