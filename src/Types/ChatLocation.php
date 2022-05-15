<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * Represents a location to which a chat is connected.
 */
class ChatLocation extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'location',
        'address',
    ];

    protected static array $map = [
        'location' => Location::class,
        'address' => true,
    ];

    /**
     * The location to which the supergroup is connected. Can't be a live location.
     */
    protected Location $location;

    /**
     * Location address; 1-64 characters, as defined by the chat owner
     */
    protected string $address;

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getAddress(): string
    {
        return $this->address;
    }
}
