<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Methods;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Types\ForceReply;
use Luzrain\TelegramBotApi\Types\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Types\InputFile;
use Luzrain\TelegramBotApi\Types\Message;
use Luzrain\TelegramBotApi\Types\ReplyKeyboardMarkup;
use Luzrain\TelegramBotApi\Types\ReplyKeyboardRemove;

/**
 * Use this method to send audio files, if you want Telegram clients to display them in the music player.
 * Your audio must be in the .MP3 or .M4A format. On success, the sent Message is returned.
 * Bots can currently send audio files of up to 50 MB in size, this limit may be changed in the future.
 * For sending voice messages, use the sendVoice method instead.
 */
final class SendAudio extends BaseMethod
{
    protected static string $methodName = 'sendAudio';
    protected static string $responseClass = Message::class;

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Audio file to send. Pass a file_id as String to send an audio file that exists on the Telegram servers (recommended),
         * pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a new one using multipart/form-data.
         */
        protected InputFile|string $audio,

        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
         */
        protected int|null $messageThreadId = null,

        /**
         * Audio caption, 0-1024 characters after entities parsing
         */
        protected string|null $caption = null,

        /**
         * Mode for parsing entities in the audio caption. See formatting options for more details.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        protected string|null $parseMode = null,

        /**
         * A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
         */
        protected array|null $captionEntities = null,

        /**
         * Duration of the audio in seconds
         */
        protected int|null $duration = null,

        /**
         * Performer
         */
        protected string|null $performer = null,

        /**
         * Track name
         */
        protected string|null $title = null,

        /**
         * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side.
         * The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320.
         */
        protected InputFile|string|null $thumbnail = null,

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
