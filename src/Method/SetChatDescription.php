<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to change the description of a group, a supergroup or a channel.
 * The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights.
 * Returns True on success.
 */
final class SetChatDescription extends BaseMethod
{
    protected static string $methodName = 'setChatDescription';

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * New chat description, 0-255 characters
         */
        protected string|null $description = null,
    ) {
    }
}
