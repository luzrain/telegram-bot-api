<?php

namespace TelegramBot\Api\Types\Payments;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents a portion of the price for goods or services.
 */
class LabeledPrice extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'label',
        'amount',
    ];

    protected static array $map = [
        'label' => true,
        'amount' => true,
    ];

    /**
     * Portion label
     */
    protected string $label;

    /**
     * Price of the product in the smallest units of the currency (integer, not float/double).
     * For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json,
     * it shows thenumberof digits past the decimal point for each currency (2 for the majority of currencies).
     */
    protected int $amount;

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}
