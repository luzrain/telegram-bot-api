<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

/**
 * Represents an issue with the reverse side of a document. The error is considered resolved when the file with reverse side of the document changes.
 */
final readonly class PassportElementErrorReverseSide extends PassportElementError
{
    public const SOURCE = 'reverse_side';

    public function __construct(
        /**
         * The section of the user's Telegram Passport which has the issue,
         * one of "driver_license", "identity_card"
         */
        public string $type,

        /**
         * Base64-encoded hash of the file with the reverse side of the document
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
