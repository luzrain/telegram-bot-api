<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents the content of a location message to be sent as the result of an inline query.
 */
final readonly class InputLocationMessageContent extends Type implements InputMessageContent
{
    public function __construct(
        /**
         * Latitude of the location in degrees
         */
        public float $latitude,

        /**
         * Longitude of the location in degrees
         */
        public float $longitude,

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
         * Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
         */
        public int|null $proximityAlertRadius = null,
    ) {
    }
}
