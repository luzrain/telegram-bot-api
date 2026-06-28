<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a venue to be sent.
 */
final readonly class InputMediaVenue extends InputMedia implements InputPollMedia, InputPollOptionMedia
{
    public const TYPE = 'venue';

    public function __construct(
        /**
         * Latitude of the location
         */
        public float $latitude,

        /**
         * Longitude of the location
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
         * Optional. Foursquare identifier of the venue
         */
        public string|null $foursquareId = null,

        /**
         * Optional. Foursquare type of the venue, if known. (For example, "arts_entertainment/default", "arts_entertainment/aquarium" or "food/icecream".)
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
        parent::__construct(self::TYPE);
    }
}
