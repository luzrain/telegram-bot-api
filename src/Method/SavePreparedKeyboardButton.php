<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\KeyboardButton;
use Luzrain\TelegramBotApi\Type\PreparedKeyboardButton;

/**
 * Stores a keyboard button that can be used by a user within a Mini App. Returns a PreparedKeyboardButton object.
 *
 * @extends Method<PreparedKeyboardButton>
 */
final class SavePreparedKeyboardButton extends Method
{
    protected static string $methodName = 'savePreparedKeyboardButton';
    protected static string $responseClass = PreparedKeyboardButton::class;

    public function __construct(
        /**
         * Unique identifier of the target user that can use the button
         */
        protected int $userId,

        /**
         * A JSON-serialized object describing the button to be saved.
         * The button must be of the type request_users, request_chat, or request_managed_bot.
         */
        protected KeyboardButton $button,
    ) {
    }
}
