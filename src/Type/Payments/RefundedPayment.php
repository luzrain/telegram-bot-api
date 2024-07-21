<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Type;

/**
 * This object contains basic information about a refunded payment.
 */
final readonly class RefundedPayment extends Type
{
    public function __construct(
        /**
         * Three-letter ISO 4217 currency code, or "XTR" for payments in Telegram Stars. Currently, always "XTR"
         */
        public string $currency,

        /**
         * Total refunded price in the smallest units of the currency (integer, not float/double).
         * For example, for a price of US$ 1.45, total_amount = 145. See the exp parameter in currencies.json,
         * it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
         */
        public int $totalAmount,

        /**
         * Bot-specified invoice payload
         */
        public string $invoicePayload,

        /**
         * Telegram payment identifier
         */
        public string $telegramPaymentChargeId,

        /**
         * Optional. Provider payment identifier
         */
        public string|null $providerPaymentChargeId = null,
    ) {
    }
}
