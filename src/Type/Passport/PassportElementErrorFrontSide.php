<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

use Luzrain\TelegramBotApi\BaseType;

/**
 * Represents an issue with the front side of a document. The error is considered resolved when the file with the front side of the document changes.
 */
final class PassportElementErrorFrontSide extends BaseType implements PassportElementError
{
    /**
     * Error source, must be front_side
     */
    public string $source;

    public function __construct(
        /**
         * The section of the user's Telegram Passport which has the issue,
         * one of “passport”, “driver_license”, “identity_card”, “internal_passport”
         */
        public string $type,

        /**
         * Base64-encoded hash of the file with the front side of the document
         */
        public string $fileHash,

        /**
         * Error message
         */
        public string $message,
    ) {
        $this->source = 'front_side';
    }
}
