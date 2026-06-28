<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to clear the list of pinned messages in a chat. In private chats and channel direct messages chats,
 * no additional rights are required to unpin all pinned messages. Conversely, the bot must be an administrator with the
 * 'can_pin_messages' right or the 'can_edit_messages' right to unpin all pinned messages in groups and channels respectively.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class UnpinAllChatMessages extends Method
{
    protected static string $methodName = 'unpinAllChatMessages';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel in the format @username
         */
        protected int|string $chatId,
    ) {
    }
}
