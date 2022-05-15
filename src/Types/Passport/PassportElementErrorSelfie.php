<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Passport;

/**
 * Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie changes.
 */
class PassportElementErrorSelfie extends PassportElementError
{
    protected static array $map = [
        'source' => true,
        'type' => true,
        'file_hash' => true,
        'message' => true,
    ];

    public static function create(
        string $type,
        string $fileHash,
        string $message,
    ): self {
        $instance = new self();
        $instance->type = $type;
        $instance->fileHash = $fileHash;
        $instance->message = $message;

        return $instance;
    }

    /**
     * Error source, must be selfie
     */
    protected string $source = 'selfie';

    /**
     * The section of the user's Telegram Passport which has the issue,
     * one of “passport”, “driver_license”, “identity_card”, “internal_passport”
     */
    protected string $type;

    /**
     * Base64-encoded hash of the file with the selfie
     */
    protected string $fileHash;

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

    public function getFileHash(): string
    {
        return $this->fileHash;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
