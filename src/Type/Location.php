<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a point on the map.
 */
final readonly class Location extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * Longitude as defined by sender
         */
        public float $longitude,

        /**
         * Latitude as defined by sender
         */
        public float $latitude,

        /**
         * Optional. The radius of uncertainty for the location, measured in meters; 0-1500
         */
        public float|null $horizontalAccuracy = null,

        /**
         * Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
         */
        public int|null $livePeriod = null,

        /**
         * Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
         */
        public int|null $heading = null,

        /**
         * Optional. Maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
         */
        public int|null $proximityAlertRadius = null,
    ) {
    }
}
