<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents information about an order.
 */
final class OrderInfo extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [];

    protected static array $map = [
        'name' => true,
        'phone_number' => true,
        'email' => true,
        'shipping_address' => ShippingAddress::class,
    ];

    /**
     * Optional. User name
     */
    protected string|null $name = null;

    /**
     * Optional. User's phone number
     */
    protected string|null $phoneNumber = null;

    /**
     * Optional. User email
     */
    protected string|null $email = null;

    /**
     * Optional. User shipping address
     */
    protected ShippingAddress|null $shippingAddress = null;

    public function getName(): string|null
    {
        return $this->name;
    }

    public function getPhoneNumber(): string|null
    {
        return $this->phoneNumber;
    }

    public function getEmail(): string|null
    {
        return $this->email;
    }

    public function getShippingAddress(): ShippingAddress|null
    {
        return $this->shippingAddress;
    }
}
