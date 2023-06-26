<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;

/**
 * Represents a location on a map. By default, the location will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the location.
 */
final readonly class InlineQueryResultLocation extends BaseType implements InlineQueryResult
{
    /**
     * Type of the result, must be location
     */
    public string $type;

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 Bytes
         */
        public string $id,

        /**
         * Location latitude in degrees
         */
        public float $latitude,

        /**
         * Location longitude in degrees
         */
        public float $longitude,

        /**
         * Location title
         */
        public string $title,

        /**
         * Optional. The radius of uncertainty for the location, measured in meters; 0-1500
         */
        public float|null $horizontalAccuracy = null,

        /**
         * Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
         */
        public int|null $livePeriod = null,

        /**
         * Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
         */
        public int|null $heading = null,

        /**
         * Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters.
         * Must be between 1 and 100000 if specified.
         */
        public int|null $proximityAlertRadius = null,

        /**
         * Optional. Inline keyboard attached to the message
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,

        /**
         * Optional. Content of the message to be sent instead of the location
         */
        public InputMessageContent|null $inputMessageContent = null,

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
        $this->type = 'location';
    }
}
