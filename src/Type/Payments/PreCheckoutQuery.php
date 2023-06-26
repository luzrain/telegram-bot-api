<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\User;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object contains information about an incoming pre-checkout query.
 */
final readonly class PreCheckoutQuery extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Unique query identifier
         */
        public string $id,

        /**
         * User who sent the query
         */
        public User $from,

        /**
         * Three-letter ISO 4217 currency code
         */
        public string $currency,

        /**
         * Total price in the smallest units of the currency (integer, not float/double).
         * For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json,
         * it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
         */
        public int $totalAmount,

        /**
         * Bot specified invoice payload
         */
        public string $invoicePayload,

        /**
         * Optional. Identifier of the shipping option chosen by the user
         */
        public string|null $shippingOptionId = null,

        /**
         * Optional. Order info provided by the user
         */
        public OrderInfo|null $orderInfo = null,
    ) {
    }
}
