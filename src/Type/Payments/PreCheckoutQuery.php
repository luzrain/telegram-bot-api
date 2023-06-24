<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\User;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object contains information about an incoming pre-checkout query.
 */
final class PreCheckoutQuery extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'id',
        'from',
        'currency',
        'total_amount',
        'invoice_payload',
    ];

    protected static array $map = [
        'id' => true,
        'from' => User::class,
        'currency' => true,
        'total_amount' => true,
        'invoice_payload' => true,
        'shipping_option_id' => true,
        'order_info' => OrderInfo::class,
    ];

    /**
     * Unique query identifier
     */
    protected string $id;

    /**
     * User who sent the query
     */
    protected User $from;

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

    /**
     * Bot specified invoice payload
     */
    protected string $invoicePayload;

    /**
     * Optional. Identifier of the shipping option chosen by the user
     */
    protected string|null $shippingOptionId = null;

    /**
     * Optional. Order info provided by the user
     */
    protected OrderInfo|null $orderInfo = null;

    public function getId(): string
    {
        return $this->id;
    }

    public function getFrom(): User
    {
        return $this->from;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    public function getShippingOptionId(): string|null
    {
        return $this->shippingOptionId;
    }

    public function getOrderInfo(): OrderInfo|null
    {
        return $this->orderInfo;
    }
}
