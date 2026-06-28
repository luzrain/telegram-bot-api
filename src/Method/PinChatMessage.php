<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to add a message to the list of pinned messages in a chat. In private chats and channel direct messages chats,
 * all non-service messages can be pinned. Conversely, the bot must be an administrator with the 'can_pin_messages'
 * right or the 'can_edit_messages' right to pin messages in groups and channels respectively. Returns True on success.
 *
 * @extends Method<true>
 */
final class PinChatMessage extends Method
{
    protected static string $methodName = 'pinChatMessage';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel in the format @username
         */
        protected int|string $chatId,

        /**
         * Identifier of a message to pin
         */
        protected int $messageId,

        /**
         * Unique identifier of the business connection on behalf of which the message will be pinned
         */
        protected string|null $businessConnectionId = null,

        /**
         * Pass True if it is not necessary to send a notification to all chat members about the new pinned message.
         * Notifications are always disabled in channels and private chats.
         */
        protected bool|null $disableNotification = null,
    ) {
    }
}
