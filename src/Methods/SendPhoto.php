<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\ForceReply;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\InputFile;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\ReplyKeyboardMarkup;
use TelegramBot\Api\Types\ReplyKeyboardRemove;

/**
 * Use this method to send photos. On success, the sent Message is returned.
 */
final class SendPhoto extends BaseMethod
{
    protected static string $methodName = 'sendPhoto';

    protected static string $responseClass = Message::class;

    public function __construct(
 
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Photo to send. Pass a file_id as String to send a photo that exists on the Telegram servers (recommended),
         * pass an HTTP URL as a String for Telegram to get a photo from the Internet, or upload a new photo using multipart/form-data.
         * The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total.
         * Width and height ratio must be at most 20. More info on Sending Files »
         */
        protected InputFile|string $photo,

        /**
         * Photo caption (may also be used when resending photos by file_id), 0-1024 characters after entities parsing
         */
        protected string|null $caption = null,

        /**
         * Mode for parsing entities in the photo caption. See formatting options for more details.
         */
        protected string|null $parseMode = null,

        /**
         * A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
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
        protected bool|null $replyToMessageId = null,

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
