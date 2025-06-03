<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes the physical address of a location.
 */
final readonly class LocationAddress extends Type
{
    public function __construct(
        /**
         * The two-letter ISO 3166-1 alpha-2 country code of the country where the location is located
         */
        public string $countryCode,

        /**
         * Optional. State of the location
         */
        public string|null $state = null,

        /**
         * Optional. City of the location
         */
        public string|null $city = null,

        /**
         * Optional. Street address of the location
         */
        public string|null $street = null,
    ) {
    }
}
