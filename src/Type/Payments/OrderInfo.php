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
    protected ?string $name = null;

    /**
     * Optional. User's phone number
     */
    protected ?string $phoneNumber = null;

    /**
     * Optional. User email
     */
    protected ?string $email = null;

    /**
     * Optional. User shipping address
     */
    protected ?ShippingAddress $shippingAddress = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getShippingAddress(): ?ShippingAddress
    {
        return $this->shippingAddress;
    }
}
