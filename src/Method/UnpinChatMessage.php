<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to remove a message from the list of pinned messages in a chat.
 * In private chats and channel direct messages chats, all messages can be unpinned.
 * Conversely, the bot must be an administrator with the 'can_pin_messages' right or the 'can_edit_messages'
 * right to unpin messages in groups and channels respectively. Returns True on success.
 *
 * @extends Method<true>
 */
final class UnpinChatMessage extends Method
{
    protected static string $methodName = 'unpinChatMessage';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel in the format @username
         */
        protected int|string $chatId,

        /**
         * Identifier of the message to unpin. Required if business_connection_id is specified.
         * If not specified, the most recent pinned message (by sending date) will be unpinned.
         */
        protected int|null $messageId = null,

        /**
         * Unique identifier of the business connection on behalf of which the message will be unpinned
         */
        protected string|null $businessConnectionId = null,
    ) {
    }
}
