<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Payments;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object contains basic information about an invoice.
 */
final class Invoice extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'title',
        'description',
        'start_parameter',
        'currency',
        'total_amount',
    ];

    protected static array $map = [
        'title' => true,
        'description' => true,
        'start_parameter' => true,
        'currency' => true,
        'total_amount' => true,
    ];

    /**
     * Product name
     */
    protected string $title;

    /**
     * Product description
     */
    protected string $description;

    /**
     * Unique bot deep-linking parameter that can be used to generate this invoice
     */
    protected string $startParameter;

    /**
     * Three-letter ISO 4217 currency code
     */
    protected string $currency;

    /**
     * Total price in the smallest units of the currency (integer, not float/double).
     * For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json,
     * it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     */
    protected int $totalAmount;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getStartParameter(): string
    {
        return $this->startParameter;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }
}
