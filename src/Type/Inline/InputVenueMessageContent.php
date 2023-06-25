<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\BaseType;

/**
 * Represents the content of a venue message to be sent as the result of an inline query.
 */
final class InputVenueMessageContent extends BaseType implements InputMessageContent
{
    public function __construct(
        /**
         * Latitude of the venue in degrees
         */
        public float $latitude,

        /**
         * Longitude of the venue in degrees
         */
        public float $longitude,

        /**
         * Name of the venue
         */
        public string $title,

        /**
         * Address of the venue
         */
        public string $address,

        /**
         * Optional. Foursquare identifier of the venue, if known
         */
        public string|null $foursquareId = null,

        /**
         * Optional. Foursquare type of the venue, if known.
         * (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
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
    ) {
    }
}
