<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie changes.
 */
final readonly class PassportElementErrorSelfie extends Type implements PassportElementError
{
    /**
     * Error source, must be selfie
     */
    public string $source;

    public function __construct(
        /**
         * The section of the user's Telegram Passport which has the issue,
         * one of "passport", "driver_license", "identity_card", "internal_passport"
         */
        public string $type,

        /**
         * Base64-encoded hash of the file with the selfie
         */
        public string $fileHash,

        /**
         * Error message
         */
        public string $message,
    ) {
        $this->source = 'selfie';
    }
}
