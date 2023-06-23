<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Payments;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object contains basic information about a successful payment.
 */
final class SuccessfulPayment extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'currency',
        'total_amount',
        'invoice_payload',
        'telegram_payment_charge_id',
        'provider_payment_charge_id',
    ];

    protected static array $map = [
        'currency' => true,
        'total_amount' => true,
        'invoice_payload' => true,
        'shipping_option_id' => true,
        'order_info' => OrderInfo::class,
        'telegram_payment_charge_id' => true,
        'provider_payment_charge_id' => true,
    ];

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
    protected ?string $shippingOptionId = null;

    /**
     * Optional. Order info provided by the user
     */
    protected ?OrderInfo $orderInfo = null;

    /**
     * Telegram payment identifier
     */
    protected string $telegramPaymentChargeId;

    /**
     * Provider payment identifier
     */
    protected string $providerPaymentChargeId;

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

    public function getShippingOptionId(): ?string
    {
        return $this->shippingOptionId;
    }

    public function getOrderInfo(): ?OrderInfo
    {
        return $this->orderInfo;
    }

    public function getTelegramPaymentChargeId(): ?string
    {
        return $this->telegramPaymentChargeId;
    }

    public function getProviderPaymentChargeId(): ?string
    {
        return $this->providerPaymentChargeId;
    }
}
