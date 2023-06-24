<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to add a message to the list of pinned messages in a chat.
 * If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the
 * 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel.
 * Returns True on success.
 *
 * @extends BaseMethod<true>
 */
final class PinChatMessage extends BaseMethod
{
    protected static string $methodName = 'pinChatMessage';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Identifier of a message to pin
         */
        protected int $messageId,

        /**
         * Pass True, if it is not necessary to send a notification to all chat members about the new pinned message.
         * Notifications are always disabled in channels and private chats.
         */
        protected bool|null $disableNotification = null,
    ) {
    }
}
