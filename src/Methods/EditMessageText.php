<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\MessageEntity;

/**
 * Use this method to edit text and game messages.
 * On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 */
final class EditMessageText extends BaseMethod
{
    protected static string $methodName = 'editMessageText';
    protected static string $responseClass = Message::class;

    public function __construct(

        /**
         * New text of the message, 1-4096 characters after entities parsing
         */
        protected string $text,

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
         * Mode for parsing entities in the message text. See formatting options for more details.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        protected string|null $parseMode = null,

        /**
         * A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
         * 
         * @var MessageEntity[]
         */
        protected array|null $entities = null,

        /**
         * Disables link previews for links in this message
         */
        protected bool|null $disableWebPagePreview = null,

        /**
         * A JSON-serialized object for an inline keyboard.
         */
        protected InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
    }
}
