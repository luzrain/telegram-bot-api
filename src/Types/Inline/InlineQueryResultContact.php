<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Inline;

use TelegramBot\Api\Types\InlineKeyboardMarkup;

/**
 * Represents a contact with a phone number. By default, this contact will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the contact.
 */
class InlineQueryResultContact extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'phone_number' => true,
        'first_name' => true,
        'last_name' => true,
        'vcard' => true,
        'reply_markup' => InlineKeyboardMarkup::class,
        'input_message_content' => InputMessageContent::class,
        'thumb_url' => true,
        'thumb_width' => true,
        'thumb_height' => true,
    ];

    /**
     * Type of the result, must be contact
     */
    protected string $type = 'contact';

    /**
     * Unique identifier for this result, 1-64 Bytes
     */
    protected string $id;

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
     */
    protected ?string $vcard = null;

    /**
     * Optional. Inline keyboard attached to the message
     */
    protected ?InlineKeyboardMarkup $replyMarkup = null;

    /**
     * Optional. Content of the message to be sent instead of the contact
     */
    protected ?InputMessageContent $inputMessageContent = null;

    /**
     * Optional. Url of the thumbnail for the result
     */
    protected ?string $thumbUrl = null;

    /**
     * Optional. Thumbnail width
     */
    protected ?int $thumbWidth = null;

    /**
     * Optional. Thumbnail height
     */
    protected ?int $thumbHeight = null;

    public static function create(
        string $id,
        string $phoneNumber,
        string $firstName,
        ?string $lastName = null,
        ?string $vcard = null,
        ?InlineKeyboardMarkup $replyMarkup = null,
        ?InputMessageContent $inputMessageContent = null,
        ?string $thumbUrl = null,
        ?int $thumbWidth = null,
        ?int $thumbHeight = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->phoneNumber = $phoneNumber;
        $instance->firstName = $firstName;
        $instance->lastName = $lastName;
        $instance->vcard = $vcard;
        $instance->replyMarkup = $replyMarkup;
        $instance->inputMessageContent = $inputMessageContent;
        $instance->thumbUrl = $thumbUrl;
        $instance->thumbWidth = $thumbWidth;
        $instance->thumbHeight = $thumbHeight;

        return $instance;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getId(): string
    {
        return $this->id;
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

    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): ?InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getThumbUrl(): ?string
    {
        return $this->thumbUrl;
    }

    public function getThumbWidth(): ?int
    {
        return $this->thumbWidth;
    }

    public function getThumbHeight(): ?int
    {
        return $this->thumbHeight;
    }
}
