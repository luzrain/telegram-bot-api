<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
final readonly class InlineQueryResultGif extends InlineQueryResult
{
    public const TYPE = 'gif';

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         */
        public string $id,

        /**
         * A valid URL for the GIF file. File size must not exceed 1MB
         */
        public string $gifUrl,

        /**
         * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
         */
        public string $thumbnailUrl,

        /**
         * Optional. Width of the GIF
         */
        public int|null $gifWidth = null,

        /**
         * Optional. Height of the GIF
         */
        public int|null $gifHeight = null,

        /**
         * Optional. Duration of the GIF in seconds
         */
        public int|null $gifDuration = null,

        /**
         * Optional. MIME type of the thumbnail, must be one of "image/jpeg", "image/gif", or "video/mp4". Defaults to "image/jpeg"
         */
        public string|null $thumbnailMimeType = null,

        /**
         * Optional. Title for the result
         */
        public string|null $title = null,

        /**
         * Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing
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
         * Optional. Content of the message to be sent instead of the GIF animation
         */
        public InputMessageContent|null $inputMessageContent = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
