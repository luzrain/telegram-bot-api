<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the photo.
 */
final readonly class InlineQueryResultPhoto extends BaseType implements InlineQueryResult
{
    /**
     * Type of the result, must be photo
     */
    public string $type;

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         */
        public string $id,

        /**
         * A valid URL of the photo. Photo must be in JPEG format. Photo size must not exceed 5MB
         */
        public string $photoUrl,

        /**
         * URL of the thumbnail for the photo
         */
        public string $thumbUrl,

        /**
         * Optional. Width of the photo
         */
        public int|null $photoWidth = null,

        /**
         * Optional. Height of the photo
         */
        public int|null $photoHeight = null,

        /**
         * Optional. Title for the result
         */
        public string|null $title = null,

        /**
         * Optional. Short description of the result
         */
        public string|null $description = null,

        /**
         * Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
         */
        public string|null $caption = null,

        /**
         * Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
         */
        public string|null $parseMode = null,

        /**
         * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
         *
         * @var list<MessageEntity>|null
         */
        public array|null $captionEntities = null,

        /**
         * Optional. Inline keyboard attached to the message
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,

        /**
         * Optional. Content of the message to be sent instead of the photo
         */
        public InputMessageContent|null $inputMessageContent = null,
    ) {
        $this->type = 'photo';
    }
}
