<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Payments;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a shipping address.
 */
final class ShippingAddress extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'country_code',
        'state',
        'city',
        'street_line1',
        'street_line2',
        'post_code',
    ];

    protected static array $map = [
        'country_code' => true,
        'state' => true,
        'city' => true,
        'street_line1' => true,
        'street_line2' => true,
        'post_code' => true,
    ];

    /**
     * ISO 3166-1 alpha-2 country code
     */
    protected string $countryCode;

    /**
     * State, if applicable
     */
    protected string $state;

    /**
     * City
     */
    protected string $city;

    /**
     * First line for the address
     */
    protected string $streetLine1;

    /**
     * Second line for the address
     */
    protected string $streetLine2;

    /**
     * Address post code
     */
    protected string $postCode;

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getStreetLine1(): string
    {
        return $this->streetLine1;
    }

    public function getStreetLine2(): string
    {
        return $this->streetLine2;
    }

    public function getPostCode(): string
    {
        return $this->postCode;
    }
}
