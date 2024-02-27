<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to a voice recording in an .OGG container encoded with OPUS.
 * By default, this voice recording will be sent by the user. Alternatively, you can use input_message_content
 * to send a message with the specified content instead of the the voice message.
 */
final readonly class InlineQueryResultVoice extends InlineQueryResult
{
    public const TYPE = 'voice';

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         */
        public string $id,

        /**
         * A valid URL for the voice recording
         */
        public string $voiceUrl,

        /**
         * Recording title
         */
        public string $title,

        /**
         * Optional. Caption, 0-1024 characters after entities parsing
         */
        public string|null $caption = null,

        /**
         * Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
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
         * Optional. Recording duration in seconds
         */
        public int|null $voiceDuration = null,

        /**
         * Optional. Inline keyboard attached to the message
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,

        /**
         * Optional. Content of the message to be sent instead of the voice recording
         */
        public InputMessageContent|null $inputMessageContent = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
