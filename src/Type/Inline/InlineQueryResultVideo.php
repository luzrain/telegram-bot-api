<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to a page containing an embedded video player or a video file.
 * By default, this video file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 */
final readonly class InlineQueryResultVideo extends BaseType implements InlineQueryResult
{
    /**
     * Type of the result, must be video
     */
    public string $type;

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         */
        public string $id,

        /**
         * A valid URL for the embedded video player or video file
         */
        public string $videoUrl,

        /**
         * Mime type of the content of video url, “text/html” or “video/mp4”
         */
        public string $mimeType,

        /**
         * URL of the thumbnail (JPEG only) for the video
         */
        public string $thumbUrl,

        /**
         * Title for the result
         */
        public string $title,

        /**
         * Optional. Caption of the video to be sent, 0-1024 characters after entities parsing
         */
        public string|null $caption = null,

        /**
         * Optional. Mode for parsing entities in the video caption. See formatting options for more details.
         */
        public string|null $parseMode = null,

        /**
         * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
         *
         * @var list<MessageEntity>|null
         */
        public array|null $captionEntities = null,

        /**
         * Optional. Video width
         */
        public int|null $videoWidth = null,

        /**
         * Optional. Video height
         */
        public int|null $videoHeight = null,

        /**
         * Optional. Video duration in seconds
         */
        public int|null $videoDuration = null,

        /**
         * Optional. Short description of the result
         */
        public string|null $description = null,

        /**
         * Optional. Inline keyboard attached to the message
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,

        /**
         * Optional. Content of the message to be sent instead of the video.
         * This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
         */
        public InputMessageContent|null $inputMessageContent = null,
    ) {
        $this->type = 'video';
    }
}
