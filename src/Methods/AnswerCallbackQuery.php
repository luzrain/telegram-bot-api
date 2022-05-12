<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;

/**
 * Use this method to send answers to callback queries sent from inline keyboards.
 * The answer will be displayed to the user as a notification at the top of the chat screen or as an alert.
 * On success, True is returned.
 */
final class AnswerCallbackQuery extends BaseMethod
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
         * URL that will be opened by the user's client. If you have created a Game and accepted the conditions via @Botfather,
         * specify the URL that opens your game — note that this will only work if the query comes from a callback_game button.
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
