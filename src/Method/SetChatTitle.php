<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to change the title of a chat. Titles can't be changed for private chats.
 * The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights.
 * Returns True on success.
 */
final class SetChatTitle extends BaseMethod
{
    protected static string $methodName = 'setChatTitle';

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * New chat title, 1-255 characters
         */
        protected string $title,
    ) {
    }
}
