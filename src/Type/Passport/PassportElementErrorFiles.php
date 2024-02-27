<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

/**
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 */
final readonly class PassportElementErrorFiles extends PassportElementError
{
    public const SOURCE = 'files';

    public function __construct(
        /**
         * The section of the user's Telegram Passport which has the issue, one of
         * "utility_bill", "bank_statement", "rental_agreement", "passport_registration", "temporary_registration"
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
