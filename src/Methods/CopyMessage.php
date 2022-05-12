<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\ForceReply;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\MessageId;
use TelegramBot\Api\Types\ReplyKeyboardMarkup;
use TelegramBot\Api\Types\ReplyKeyboardRemove;

/**
 * Use this method to copy messages of any kind. Service messages and invoice messages can't be copied.
 * The method is analogous to the method forwardMessage, but the copied message doesn't have a link to the original message.
 * Returns the MessageId of the sent message on success.
 */
final class CopyMessage extends BaseMethod
{
    protected static string $methodName = 'copyMessage';
    protected static string $responseClass = MessageId::class;

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Unique identifier for the chat where the original message was sent (or channel username in the format @channelusername)
         */
        protected int|string $fromChatId,

        /**
         * Message identifier in the chat specified in from_chat_id
         */
        protected int $messageId,

        /**
         * New caption for media, 0-1024 characters after entities parsing. If not specified, the original caption is kept
         */
        protected string|null $caption = null,

        /**
         * Mode for parsing entities in the new caption. See formatting options for more details.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        protected string|null $parseMode = null,

        /**
         * A JSON-serialized list of special entities that appear in the new caption, which can be specified instead of parse_mode
         */
        protected array|null $captionEntities = null,

        /**
         * Sends the message silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the sent message from forwarding and saving
         */
        protected bool|null $protectContent = null,

        /**
         * If the message is a reply, ID of the original message
         */
        protected int|null $replyToMessageId = null,

        /**
         * Pass True, if the message should be sent even if the specified replied-to message is not found
         */
        protected bool|null $allowSendingWithoutReply = null,

        /**
         * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
         * instructions to remove reply keyboard or to force a reply from the user.
         */
        protected InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null,
    ) {
    }
}
