<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a location to be sent.
 */
final readonly class InputMediaLocation extends InputMedia implements InputPollMedia, InputPollOptionMedia
{
    public const TYPE = 'location';

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
         * Optional. The radius of uncertainty for the location, measured in meters; 0-1500
         */
        public float|null $horizontalAccuracy = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
