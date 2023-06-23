<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Payments;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
use TelegramBot\Api\Types\User;

/**
 * This object contains information about an incoming shipping query.
 */
class ShippingQuery extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'id',
        'from',
        'invoice_payload',
        'shipping_address',
    ];

    protected static array $map = [
        'id' => true,
        'from' => User::class,
        'invoice_payload' => true,
        'shipping_address' => ShippingAddress::class,
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
     * Bot specified invoice payload
     */
    protected string $invoicePayload;

    /**
     * User specified shipping address
     */
    protected ShippingAddress $shippingAddress;

    public function getId(): string
    {
        return $this->id;
    }

    public function getFrom(): User
    {
        return $this->from;
    }

    public function getInvoicePayload(): string
    {
        return $this->invoicePayload;
    }

    public function getShippingAddress(): ShippingAddress
    {
        return $this->shippingAddress;
    }
}
