<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\Types\ForceReply;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\ReplyKeyboardMarkup;
use TelegramBot\Api\Types\ReplyKeyboardRemove;

/**
 * Use this method to send text messages. On success, the sent Message is returned.
 */
class SendMessage extends BaseMethod
{
    protected const METHOD_NAME = 'sendMessage';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        int|string $chatId,

        /**
         * Text of the message to be sent, 1-4096 characters after entities parsing
         */
        string $text,

        /**
         * Mode for parsing entities in the message text. See formatting options for more details.
         */
        ?string $parseMode = null,

        /**
         * A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
         */
        ?array $entities = null,

        /**
         * Disables link previews for links in this message
         */
        ?bool $disableWebPagePreview = null,

        /**
         * Sends the message silently. Users will receive a notification with no sound.
         */
        ?bool $disableNotification = null,

        /**
         * Protects the contents of the sent message from forwarding and saving
         */
        ?bool $protectContent = null,

        /**
         * If the message is a reply, ID of the original message
         */
        ?bool $replyToMessageId = null,

        /**
         * Pass True, if the message should be sent even if the specified replied-to message is not found
         */
        ?bool $allowSendingWithoutReply = null,

        /**
         * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
         * instructions to remove reply keyboard or to force a reply from the user.
         */
        InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null,
    ) {
        $this->request = [
            'chat_id' => $chatId,
            'text' => $text,
            'parse_mode' => $parseMode,
            'entities' => $entities,
            'disable_web_page_preview' => $disableWebPagePreview,
            'disable_notification' => $disableNotification,
            'protect_content' => $protectContent,
            'reply_to_message_id' => $replyToMessageId,
            'allow_sending_without_reply' => $allowSendingWithoutReply,
            'reply_markup' => $replyMarkup,
        ];
    }

    public function createResponse(array $data): BaseType
    {
        return Message::fromResponse($data);
    }
}
