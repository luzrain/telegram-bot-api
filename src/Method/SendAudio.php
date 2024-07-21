<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\ForceReply;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\InputFile;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\MessageEntity;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardRemove;
use Luzrain\TelegramBotApi\Type\ReplyParameters;

/**
 * Use this method to send audio files, if you want Telegram clients to display them in the music player.
 * Your audio must be in the .MP3 or .M4A format. On success, the sent Message is returned.
 * Bots can currently send audio files of up to 50 MB in size, this limit may be changed in the future.
 * For sending voice messages, use the sendVoice method instead.
 *
 * @extends Method<Message>
 */
final class SendAudio extends Method
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
         * Unique identifier of the business connection on behalf of which the message will be sent
         */
        protected string|null $businessConnectionId = null,

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
         *
         * @var list<MessageEntity>|null
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
         * Unique identifier of the message effect to be added to the message; for private chats only
         */
        protected string|null $messageEffectId = null,

        /**
         * Description of the message to reply to
         */
        protected ReplyParameters|null $replyParameters = null,

        /**
         * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
         * instructions to remove a reply keyboard or to force a reply from the user.
         * Not supported for messages sent on behalf of a business account.
         */
        protected InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null,
    ) {
    }
}
