<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Passport;

/**
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 */
class PassportElementErrorDataField extends PassportElementError
{
    protected static array $map = [
        'source' => true,
        'type' => true,
        'field_name' => true,
        'data_hash' => true,
        'message' => true,
    ];

    public static function create(
        string $type,
        string $fieldName,
        string $dataHash,
        string $message,
    ): self {
        $instance = new self();
        $instance->type = $type;
        $instance->fieldName = $fieldName;
        $instance->dataHash = $dataHash;
        $instance->message = $message;

        return $instance;
    }

    /**
     * Error source, must be data
     */
    protected string $source = 'data';

    /**
     * The section of the user's Telegram Passport which has the error,
     * one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
     */
    protected string $type;

    /**
     * Name of the data field which has the error
     */
    protected string $fieldName;

    /**
     * Base64-encoded data hash
     */
    protected string $dataHash;

    /**
     * Error message
     */
    protected string $message;

    public function getSource(): string
    {
        return $this->source;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getFieldName(): string
    {
        return $this->fieldName;
    }

    public function getDataHash(): string
    {
        return $this->dataHash;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
