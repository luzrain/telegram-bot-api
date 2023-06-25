<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;

/**
 * Represents a venue. By default, the venue will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
 */
final class InlineQueryResultVenue extends BaseType implements InlineQueryResult
{
    /**
     * Type of the result, must be venue
     */
    public string $type;

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 Bytes
         */
        public string $id,

        /**
         * Latitude of the venue location in degrees
         */
        public float $latitude,

        /**
         * Longitude of the venue location in degrees
         */
        public float $longitude,

        /**
         * Title of the venue
         */
        public string $title,

        /**
         * Address of the venue
         */
        public string $address,

        /**
         * Optional. Foursquare identifier of the venue if known
         */
        public string|null $foursquareId = null,

        /**
         * Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
         */
        public string|null $foursquareType = null,

        /**
         * Optional. Google Places identifier of the venue
         */
        public string|null $googlePlaceId = null,

        /**
         * Optional. Google Places type of the venue. (See supported types.)
         *
         * @see https://developers.google.com/places/web-service/supported_types
         */
        public string|null $googlePlaceType = null,

        /**
         * Optional. Inline keyboard attached to the message
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,

        /**
         * Optional. Content of the message to be sent instead of the venue
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
        $this->type = 'venue';
    }
}
