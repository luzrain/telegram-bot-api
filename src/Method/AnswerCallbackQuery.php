<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to send answers to callback queries sent from inline keyboards.
 * The answer will be displayed to the user as a notification at the top of the chat screen or as an alert.
 * On success, True is returned.
 *
 * @extends Method<true>
 */
final class AnswerCallbackQuery extends Method
{
    protected static string $methodName = 'answerCallbackQuery';

    public function __construct(
        /**
         * Unique identifier for the query to be answered
         */
        protected string $callbackQueryId,

        /**
         * Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
         */
        protected string|null $text = null,

        /**
         * If True, an alert will be shown by the client instead of a notification at the top of the chat screen.
         * Defaults to false.
         */
        protected bool|null $showAlert = null,

        /**
         * URL that will be opened by the user's client. If you have created a Game and accepted the conditions via @BotFather,
         * specify the URL that opens your game - note that this will only work if the query comes from a callback_game button.
         *
         * Otherwise, you may use links like t.me/your_bot?start=XXXX that open your bot with a parameter.
         */
        protected string|null $url = null,

        /**
         * The maximum amount of time in seconds that the result of the callback query may be cached client-side.
         * Telegram apps will support caching starting in version 3.14. Defaults to 0.
         */
        protected int|null $cacheTime = null,
    ) {
    }
}
