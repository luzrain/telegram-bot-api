<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

/**
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 */
final readonly class PassportElementErrorDataField extends PassportElementError
{
    public const SOURCE = 'data';

    public function __construct(
        /**
         * The section of the user's Telegram Passport which has the error,
         * one of "personal_details", "passport", "driver_license", "identity_card", "internal_passport", "address"
         */
        public string $type,

        /**
         * Name of the data field which has the error
         */
        public string $fieldName,

        /**
         * Base64-encoded data hash
         */
        public string $dataHash,

        /**
         * Error message
         */
        public string $message,
    ) {
        parent::__construct(self::SOURCE);
    }
}
