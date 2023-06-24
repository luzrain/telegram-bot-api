<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Type\ForceReply;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\InputFile;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardRemove;

/**
 * Use this method to send video files, Telegram clients support mp4 videos (other formats may be sent as Document).
 * On success, the sent Message is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.
 *
 * @extends BaseMethod<Message>
 */
final class SendVideo extends BaseMethod
{
    protected static string $methodName = 'sendVideo';
    protected static string $responseClass = Message::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Video to send. Pass a file_id as String to send a video that exists on the Telegram servers (recommended),
         * pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data.
         */
        protected InputFile|string $video,

        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
         */
        protected int|null $messageThreadId = null,

        /**
         * Duration of sent video in seconds
         */
        protected int|null $duration = null,

        /**
         * Video width
         */
        protected int|null $width = null,

        /**
         * Video height
         */
        protected int|null $height = null,

        /**
         * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side.
         * The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320.
         */
        protected InputFile|string|null $thumbnail = null,

        /**
         * Video caption (may also be used when resending videos by file_id), 0-1024 characters after entities parsing
         */
        protected string|null $caption = null,

        /**
         * Mode for parsing entities in the video caption. See formatting options for more details.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        protected string|null $parseMode = null,

        /**
         * A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
         */
        protected array|null $captionEntities = null,

        /**
         * Pass True if the photo needs to be covered with a spoiler animation
         */
        protected bool|null $hasSpoiler = null,

        /**
         * Pass True, if the uploaded video is suitable for streaming
         */
        protected bool|null $supportsStreaming = null,

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
