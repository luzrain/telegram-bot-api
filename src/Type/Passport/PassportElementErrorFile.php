<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

/**
 * Represents an issue with a document scan. The error is considered resolved when the file with the document scan changes.
 */
final readonly class PassportElementErrorFile extends PassportElementError
{
    public const SOURCE = 'file';

    public function __construct(
        /**
         * The section of the user's Telegram Passport which has the issue,
         * one of "utility_bill", "bank_statement", "rental_agreement", "passport_registration", "temporary_registration"
         */
        public string $type,

        /**
         * Base64-encoded file hash
         */
        public string $fileHash,

        /**
         * Error message
         */
        public string $message,
    ) {
        parent::__construct(self::SOURCE);
    }
}
