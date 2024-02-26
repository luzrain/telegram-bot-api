<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to an MP3 audio file. By default, this audio file will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 */
final readonly class InlineQueryResultAudio extends Type implements InlineQueryResult
{
    /**
     * Type of the result, must be audio
     */
    public string $type;

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         */
        public string $id,

        /**
         * A valid URL for the audio file
         */
        public string $audioUrl,

        /**
         * Title
         */
        public string $title,

        /**
         * Optional. Caption, 0-1024 characters after entities parsing
         */
        public string|null $caption = null,

        /**
         * Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
         */
        public string|null $parseMode = null,

        /**
         * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $captionEntities = null,

        /**
         * Optional. Performer
         */
        public string|null $performer = null,

        /**
         * Optional. Audio duration in seconds
         */
        public int|null $audioDuration = null,

        /**
         * Optional. Inline keyboard attached to the message
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,

        /**
         * Optional. Content of the message to be sent instead of the audio
         */
        public InputMessageContent|null $inputMessageContent = null,
    ) {
        $this->type = 'audio';
    }
}
