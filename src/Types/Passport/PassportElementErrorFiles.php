<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Passport;

/**
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 */
class PassportElementErrorFiles extends PassportElementError
{
    protected static array $map = [
        'source' => true,
        'type' => true,
        'file_hashes' => true,
        'message' => true,
    ];

    public static function create(
        string $type,
        string $fileHashes,
        string $message,
    ): self {
        $instance = new self();
        $instance->type = $type;
        $instance->fileHashes = $fileHashes;
        $instance->message = $message;

        return $instance;
    }

    /**
     * Error source, must be files
     */
    protected string $source = 'files';

    /**
     * The section of the user's Telegram Passport which has the issue, one of
     * “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
     */
    protected string $type;

    /**
     * List of base64-encoded file hashes
     *
     * @var string[]
     */
    protected array $fileHashes;

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

    /**
     * @return string[]
     */
    public function getFileHashes(): array
    {
        return $this->fileHashes;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
