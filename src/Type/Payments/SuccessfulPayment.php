<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Type;

/**
 * This object contains basic information about a successful payment.
 */
final readonly class SuccessfulPayment extends Type
{
    protected function __construct(
        /**
         * Three-letter ISO 4217 currency code
         *
         * @see https://core.telegram.org/bots/payments#supported-currencies
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
         * Telegram payment identifier
         */
        public string $telegramPaymentChargeId,

        /**
         * Provider payment identifier
         */
        public string $providerPaymentChargeId,

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
