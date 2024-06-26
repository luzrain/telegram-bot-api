<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\LinkPreviewOptions;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Use this method to edit text and game messages.
 * On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 *
 * @todo: Check return type in real case
 * @extends Method<Message>
 */
final class EditMessageText extends Method
{
    protected static string $methodName = 'editMessageText';
    protected static string $responseClass = Message::class;

    public function __construct(
        /**
         * New text of the message, 1-4096 characters after entities parsing
         */
        protected string $text,

        /**
         * Unique identifier of the business connection on behalf of which the message to be edited was sent
         */
        protected string|null $businessConnectionId = null,

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
         * @var list<MessageEntity>|null
         */
        protected array|null $entities = null,

        /**
         * Link preview generation options for the message
         */
        protected LinkPreviewOptions|null $linkPreviewOptions = null,

        /**
         * A JSON-serialized object for an inline keyboard.
         */
        protected InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
    }
}
