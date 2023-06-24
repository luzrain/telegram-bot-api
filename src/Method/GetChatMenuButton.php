<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Type\MenuButton;

/**
 * Use this method to get the current value of the bot's menu button in a private chat, or the default menu button.
 * Returns MenuButton on success.
 *
 * @extends BaseMethod<MenuButton>
 */
final class GetChatMenuButton extends BaseMethod
{
    protected static string $methodName = 'getChatMenuButton';
    protected static string $responseClass = MenuButton::class;

    public function __construct(
        /**
         * Unique identifier for the target private chat. If not specified, default bot's menu button will be returned
         */
        protected int|null $chatId = null,
    ) {
    }
}