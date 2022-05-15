<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\Message;

/**
 * Use this method to edit only the reply markup of messages.
 * On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 */
final class EditMessageReplyMarkup extends BaseMethod
{
    protected static string $methodName = 'editMessageReplyMarkup';
    protected static string $responseClass = Message::class;

    public function __construct(

        /**
         * Required if inline_message_id is not specified.
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string|null $chatId = null,

        /**
         * Required if inline_message_id is not specified. Identifier of the message to edit
         */
        protected int|null $messageId = null,

        /**
         * Required if chat_id and message_id are not specified. Identifier of the inline message
         */
        protected string|null $inlineMessageId = null,

        /**
         * A JSON-serialized object for an inline keyboard.
         */
        protected InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
    }
}
