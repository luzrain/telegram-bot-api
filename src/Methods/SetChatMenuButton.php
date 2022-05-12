<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\MenuButton;

/**
 * Use this method to change the bot's menu button in a private chat, or the default menu button. Returns True on success.
 */
final class SetChatMenuButton extends BaseMethod
{
    protected static string $methodName = 'setChatMenuButton';

    public function __construct(

        /**
         * Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
         */
        protected int|null $chatId = null,

        /**
         * A JSON-serialized object for the bot's new menu button. Defaults to MenuButtonDefault
         */
        protected MenuButton|null $menuButton = null,
    ) {
    }
}
