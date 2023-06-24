<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;

/**
 * Represents a contact with a phone number. By default, this contact will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the contact.
 */
final class InlineQueryResultContact extends InlineQueryResult
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
        'thumbnail_url' => true,
        'thumbnail_width' => true,
        'thumbnail_height' => true,
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
    protected string|null $lastName = null;

    /**
     * Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
     */
    protected string|null $vcard = null;

    /**
     * Optional. Inline keyboard attached to the message
     */
    protected InlineKeyboardMarkup|null $replyMarkup = null;

    /**
     * Optional. Content of the message to be sent instead of the contact
     */
    protected InputMessageContent|null $inputMessageContent = null;

    /**
     * Optional. Url of the thumbnail for the result
     */
    protected string|null $thumbnailUrl = null;

    /**
     * Optional. Thumbnail width
     */
    protected int|null $thumbnailWidth = null;

    /**
     * Optional. Thumbnail height
     */
    protected int|null $thumbnailHeight = null;

    public static function create(
        string $id,
        string $phoneNumber,
        string $firstName,
        string|null $lastName = null,
        string|null $vcard = null,
        InlineKeyboardMarkup|null $replyMarkup = null,
        InputMessageContent|null $inputMessageContent = null,
        string|null $thumbnailUrl = null,
        int|null $thumbnailWidth = null,
        int|null $thumbnailHeight = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->phoneNumber = $phoneNumber;
        $instance->firstName = $firstName;
        $instance->lastName = $lastName;
        $instance->vcard = $vcard;
        $instance->replyMarkup = $replyMarkup;
        $instance->inputMessageContent = $inputMessageContent;
        $instance->thumbnailUrl = $thumbnailUrl;
        $instance->thumbnailWidth = $thumbnailWidth;
        $instance->thumbnailHeight = $thumbnailHeight;

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

    public function getLastName(): string|null
    {
        return $this->lastName;
    }

    public function getVcard(): string|null
    {
        return $this->vcard;
    }

    public function getReplyMarkup(): InlineKeyboardMarkup|null
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    public function getThumbnailUrl(): string|null
    {
        return $this->thumbnailUrl;
    }

    public function getThumbnailWidth(): int|null
    {
        return $this->thumbnailWidth;
    }

    public function getThumbnailHeight(): int|null
    {
        return $this->thumbnailHeight;
    }
}
