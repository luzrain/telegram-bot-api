<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

/**
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
 */
final readonly class PassportElementErrorTranslationFiles extends PassportElementError
{
    public const SOURCE = 'translation_files';

    public function __construct(
        /**
         * Type of element of the user's Telegram Passport which has the issue, one of"passport", "driver_license", "identity_card",
         * "internal_passport", "utility_bill", "bank_statement", "rental_agreement", "passport_registration", "temporary_registration"
         */
        public string $type,

        /**
         * List of base64-encoded file hashes
         *
         * @var list<string>
         */
        public array $fileHashes,

        /**
         * Error message
         */
        public string $message,
    ) {
        parent::__construct(self::SOURCE);
    }
}
