<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\Message;

/**
 * Use this method to stop updating a live location message before live_period expires.
 * On success, if the message is not an inline message, the edited Message is returned, otherwise True is returned.
 *
 * @extends Method<Message>
 */
final class StopMessageLiveLocation extends Method
{
    protected static string $methodName = 'stopMessageLiveLocation';
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
         * Required if inline_message_id is not specified. Identifier of the message with live location to stop
         */
        protected int|null $messageId = null,

        /**
         * Required if chat_id and message_id are not specified. Identifier of the inline message
         */
        protected string|null $inlineMessageId = null,

        /**
         * A JSON-serialized object for a new inline keyboard.
         */
        protected InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
    }
}
