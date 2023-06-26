<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object contains basic information about an invoice.
 */
final readonly class Invoice extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * Product name
         */
        public string $title,

        /**
         * Product description
         */
        public string $description,

        /**
         * Unique bot deep-linking parameter that can be used to generate this invoice
         */
        public string $startParameter,

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
    ) {
    }
}
