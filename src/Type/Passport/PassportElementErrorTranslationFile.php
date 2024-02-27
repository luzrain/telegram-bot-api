<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

/**
 * Represents an issue with one of the files that constitute the translation of a document. The error is considered resolved when the file changes.
 */
final readonly class PassportElementErrorTranslationFile extends PassportElementError
{
    public const SOURCE = 'translation_file';

    public function __construct(
        /**
         * Type of element of the user's Telegram Passport which has the issue, one of"passport", "driver_license","identity_card",
         * "internal_passport", "utility_bill", "bank_statement", "rental_agreement", "passport_registration", "temporary_registration"
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
