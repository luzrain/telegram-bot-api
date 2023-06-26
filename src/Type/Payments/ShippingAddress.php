<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a shipping address.
 */
final readonly class ShippingAddress extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * ISO 3166-1 alpha-2 country code
         */
        public string $countryCode,

        /**
         * State, if applicable
         */
        public string $state,

        /**
         * City
         */
        public string $city,

        /**
         * First line for the address
         */
        public string $streetLine1,

        /**
         * Second line for the address
         */
        public string $streetLine2,

        /**
         * Address post code
         */
        public string $postCode,
    ) {
    }
}
