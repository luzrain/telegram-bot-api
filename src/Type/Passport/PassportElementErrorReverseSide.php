<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

use Luzrain\TelegramBotApi\BaseType;

/**
 * Represents an issue with the reverse side of a document. The error is considered resolved when the file with reverse side of the document changes.
 */
final class PassportElementErrorReverseSide extends BaseType implements PassportElementError
{
    /**
     * Error source, must be reverse_side
     */
    public string $source;

    public function __construct(
        /**
         * The section of the user's Telegram Passport which has the issue,
         * one of “driver_license”, “identity_card”
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
        $this->source = 'reverse_side';
    }
}
