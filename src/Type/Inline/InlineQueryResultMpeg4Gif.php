<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound).
 * By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively,
 * you can use input_message_content to send a message with the specified content instead of the animation.
 */
final readonly class InlineQueryResultMpeg4Gif extends InlineQueryResult
{
    public const TYPE = 'mpeg4_gif';

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         */
        public string $id,

        /**
         * A valid URL for the MP4 file. File size must not exceed 1MB
         */
        public string $mpeg4Url,

        /**
         * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
         */
        public string $thumbnailUrl,

        /**
         * Optional. Video width
         */
        public int|null $mpeg4Width = null,

        /**
         * Optional. Video height
         */
        public int|null $mpeg4Height = null,

        /**
         * Optional. Video duration in seconds
         */
        public int|null $mpeg4Duration = null,

        /**
         * Optional. MIME type of the thumbnail, must be one of "image/jpeg", "image/gif", or "video/mp4". Defaults to "image/jpeg"
         */
        public string|null $thumbnailMimeType = null,

        /**
         * Optional. Title for the result
         */
        public string|null $title = null,

        /**
         * Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
         */
        public string|null $caption = null,

        /**
         * Optional. Mode for parsing entities in the caption. See formatting options for more details.
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
         * Optional. Inline keyboard attached to the message
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,

        /**
         * Optional. Content of the message to be sent instead of the video animation
         */
        public InputMessageContent|null $inputMessageContent = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
