<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

/**
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
 */
final class PassportElementErrorTranslationFiles extends PassportElementError
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
     * Error source, must be translation_files
     */
    protected string $source = 'translation_files';

    /**
     * Type of element of the user's Telegram Passport which has the issue, one of“passport”, “driver_license”, “identity_card”,
     * “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
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
