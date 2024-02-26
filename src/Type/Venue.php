<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a venue.
 */
final readonly class Venue extends Type
{
    protected function __construct(
        /**
         * Venue location. Can't be a live location
         */
        public Location $location,

        /**
         * Name of the venue
         */
        public string $title,

        /**
         * Address of the venue
         */
        public string $address,

        /**
         * Optional. Foursquare identifier of the venue
         */
        public string|null $foursquareId = null,

        /**
         * Optional. Foursquare type of the venue. (For example, "arts_entertainment/default", "arts_entertainment/aquarium" or "food/icecream".)
         */
        public string|null $foursquareType = null,

        /**
         * Optional. Google Places identifier of the venue
         */
        public string|null $googlePlaceId = null,

        /**
         * Optional. Google Places type of the venue.
         * @see https://developers.google.com/places/web-service/supported_types
         */
        public string|null $googlePlaceType = null,
    ) {
    }
}
