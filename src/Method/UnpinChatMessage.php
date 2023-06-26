<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to remove a message from the list of pinned messages in a chat.
 * If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the
 * 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class UnpinChatMessage extends Method
{
    protected static string $methodName = 'unpinChatMessage';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Identifier of a message to unpin. If not specified, the most recent pinned message (by sending date) will be unpinned.
         */
        protected int $messageId,
    ) {
    }
}
