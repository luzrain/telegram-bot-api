<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Represents a location to which a chat is connected.
 */
final class ChatLocation extends BaseType implements TypeInterface
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
