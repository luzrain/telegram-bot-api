<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;

/**
 * Represents a link to an article or web page.
 */
final readonly class InlineQueryResultArticle extends InlineQueryResult
{
    public const TYPE = 'article';

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 Bytes
         */
        public string $id,

        /**
         * Title of the result
         */
        public string $title,

        /**
         * Content of the message to be sent
         */
        public InputMessageContent $inputMessageContent,

        /**
         * Optional. Inline keyboard attached to the message
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,

        /**
         * Optional. URL of the result
         */
        public string|null $url = null,

        /**
         * Optional. Pass True, if you don't want the URL to be shown in the message
         */
        public bool|null $hideUrl = null,

        /**
         * Optional. Short description of the result
         */
        public string|null $description = null,

        /**
         * Optional. Url of the thumbnail for the result
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
        parent::__construct(self::TYPE);
    }
}
