<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to clear the list of pinned messages in a chat.
 * If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the
 * 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel.
 * Returns True on success.
 */
final class UnpinAllChatMessages extends BaseMethod
{
    protected static string $methodName = 'unpinAllChatMessages';

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,
    ) {
    }
}
