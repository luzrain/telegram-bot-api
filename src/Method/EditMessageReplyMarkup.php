<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\Message;

/**
 * Use this method to edit only the reply markup of messages.
 * On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 *
 * @todo: Check return type in real case
 * @extends Method<Message>
 */
final class EditMessageReplyMarkup extends Method
{
    protected static string $methodName = 'editMessageReplyMarkup';
    protected static string $responseClass = Message::class;

    public function __construct(
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
         * A JSON-serialized object for an inline keyboard.
         */
        protected InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
    }
}
