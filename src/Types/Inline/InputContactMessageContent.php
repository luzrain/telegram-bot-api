<?php

namespace TelegramBot\Api\Types\Inline;

/**
 * Represents the content of a contact message to be sent as the result of an inline query.
 */
class InputContactMessageContent extends InputMessageContent
{
    protected static array $map = [
        'phone_number' => true,
        'first_name' => true,
        'last_name' => true,
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
    protected ?string $lastName = null;

    /**
     * Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
     *
     * @see https://en.wikipedia.org/wiki/VCard
     */
    protected ?string $vcard = null;

    public static function create(
        string $phoneNumber,
        string $firstName,
        ?string $lastName = null,
        ?string $vcard = null,
    ): self {
        $instance = new self();
        $instance->phoneNumber = $phoneNumber;
        $instance->firstName = $firstName;
        $instance->lastName = $lastName;
        $instance->vcard = $vcard;

        return $instance;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getVcard(): ?string
    {
        return $this->vcard;
    }
}
