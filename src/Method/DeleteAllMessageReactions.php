<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to remove up to 10000 recent reactions in a group or a supergroup chat added by a given user or chat.
 * The bot must have the 'can_delete_messages' administrator right in the chat. Returns True on success.
 *
 * @extends Method<true>
 */
final class DeleteAllMessageReactions extends Method
{
    protected static string $methodName = 'deleteAllMessageReactions';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup in the format @username
         */
        protected int|string $chatId,

        /**
         * Identifier of the user whose reactions will be removed, if the reactions were added by a user
         */
        protected int|null $userId = null,

        /**
         * Identifier of the chat whose reactions will be removed, if the reactions were added by a chat
         */
        protected int|null $actorChatId = null,
    ) {
    }
}
