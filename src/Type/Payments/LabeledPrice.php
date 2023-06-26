<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a portion of the price for goods or services.
 */
final readonly class LabeledPrice extends Type
{
    public function __construct(
        /**
         * Portion label
         */
        public string $label,

        /**
         * Price of the product in the smallest units of the currency (integer, not float/double).
         * For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json,
         * it shows thenumberof digits past the decimal point for each currency (2 for the majority of currencies).
         */
        public int $amount,
    ) {
    }
}
