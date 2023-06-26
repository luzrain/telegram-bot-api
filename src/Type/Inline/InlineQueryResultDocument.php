<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the file.
 * Currently, only .PDF and .ZIP files can be sent using this method.
 */
final readonly class InlineQueryResultDocument extends BaseType implements InlineQueryResult
{
    /**
     * Type of the result, must be document
     */
    public string $type;

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         */
        public string $id,

        /**
         * Title for the result
         */
        public string $title,

        /**
         * Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
         */
        public string|null $caption = null,

        /**
         * Optional. Mode for parsing entities in the document caption. See formatting options for more details.
         */
        public string|null $parseMode = null,

        /**
         * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
         *
         * @var list<MessageEntity>|null
         */
        public array|null $captionEntities = null,

        /**
         * A valid URL for the file
         */
        public string|null $documentUrl = null,

        /**
         * Mime type of the content of the file, either “application/pdf” or “application/zip”
         */
        public string|null $mimeType = null,

        /**
         * Optional. Short description of the result
         */
        public string|null $description = null,

        /**
         * Optional. Inline keyboard attached to the message
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,

        /**
         * Optional. Content of the message to be sent instead of the file
         */
        public InputMessageContent|null $inputMessageContent = null,

        /**
         * Optional. URL of the thumbnail (JPEG only) for the file
         */
        public string|null $thumbnailUrl = null,

        /**
         * Optional. Thumbnail width
         */
        public int|null $thumbnailWidth = null,

        /**
         * Optional. Thumbnail height
         */
        public int|null $thumbnailHeight = null,
    ) {
        $this->type = 'document';
    }
}
