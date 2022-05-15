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
 * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound).
 * On success, the sent Message is returned. Bots can currently send animation files of up to 50 MB in size, this limit may be changed in the future.
 */
final class SendAnimation extends BaseMethod
{
    protected static string $methodName = 'sendAnimation';
    protected static string $responseClass = Message::class;

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Animation to send. Pass a file_id as String to send an animation that exists on the Telegram servers (recommended),
         * pass an HTTP URL as a String for Telegram to get an animation from the Internet, or upload a new animation using multipart/form-data.
         */
        protected InputFile|string $animation,

        /**
         * Duration of sent animation in seconds
         */
        protected int|null $duration = null,

        /**
         * Animation width
         */
        protected int|null $width = null,

        /**
         * Animation height
         */
        protected int|null $height = null,
            
        /**
         * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side.
         * The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320.
         */
        protected InputFile|string|null $thumb = null,

        /**
         * Animation caption (may also be used when resending animation by file_id), 0-1024 characters after entities parsing
         */
        protected string|null $caption = null,

        /**
         * Mode for parsing entities in the animation caption. See formatting options for more details.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
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