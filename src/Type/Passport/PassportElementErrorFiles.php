<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 */
final readonly class PassportElementErrorFiles extends Type implements PassportElementError
{
    /**
     * Error source, must be files
     */
    public string $source = 'files';

    public function __construct(
        /**
         * The section of the user's Telegram Passport which has the issue, one of
         * “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
         */
        public string $type,

        /**
         * List of base64-encoded file hashes
         *
         * @var string[]
         */
        public array $fileHashes,

        /**
         * Error message
         */
        public string $message,
    ) {
        $this->source = 'files';
    }
}
