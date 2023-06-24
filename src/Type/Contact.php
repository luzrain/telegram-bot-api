<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a phone contact.
 */
final class Contact extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'phone_number',
        'first_name',
    ];

    protected static array $map = [
        'phone_number' => true,
        'first_name' => true,
        'last_name' => true,
        'user_id' => true,
        'vcard' => true,
    ];

    /**
     * Contact's phone number
     */
    protected string $phoneNumber;

    /**
     * Contact's first name
     */
    protected string $firstName;

    /**
     * Optional. Contact's last name
     */
    protected string $lastName;

    /**
     * Optional. Contact's user identifier in Telegram
     */
    protected int|null $userId = null;

    /**
     * Optional. Additional data about the contact in the form of a vCard
     */
    protected string|null $vcard = null;

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string|null
    {
        return $this->lastName;
    }

    public function getUserId(): int|null
    {
        return $this->userId;
    }

    public function getVcard(): string|null
    {
        return $this->vcard;
    }
}
