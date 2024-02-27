<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * Describes documents or other Telegram Passport elements shared with the bot by the user.
 */
final readonly class EncryptedPassportElement extends Type
{
    protected function __construct(
        /**
         * Element type. One of "personal_details", "passport", "driver_license", "identity_card", "internal_passport", "address",
         * "utility_bill", "bank_statement", "rental_agreement", "passport_registration", "temporary_registration", "phone_number", "email".
         */
        public string $type,

        /**
         * Base64-encoded element hash for using in PassportElementErrorUnspecified
         */
        public string $hash,

        /**
         * Optional. Base64-encoded encrypted Telegram Passport element data provided by the user, available for
         * "personal_details", "passport", "driver_license", "identity_card", "internal_passport" and "address" types.
         * Can be decrypted and verified using the accompanying EncryptedCredentials.
         */
        public string|null $data = null,

        /**
         * Optional. User's verified phone number, available only for "phone_number" type
         */
        public string|null $phoneNumber = null,

        /**
         * Optional. User's verified email address, available only for "email" type
         */
        public string|null $email = null,

        /**
         * Optional. Array of encrypted files with documents provided by the user, available for "utility_bill",
         * "bank_statement","rental_agreement", "passport_registration" and "temporary_registration" types.
         * Files can be decrypted and verified using the accompanying EncryptedCredentials.
         *
         * @var list<PassportFile>|null
         */
        #[ArrayType(PassportFile::class)]
        public array|null $files = null,

        /**
         * Optional. Encrypted file with the front side of the document, provided by the user.
         * Available for "passport", "driver_license", "identity_card" and "internal_passport".
         * The file can be decrypted and verified using the accompanying EncryptedCredentials.
         */
        public PassportFile|null $frontSide = null,

        /**
         * Optional. Encrypted file with the reverse side of the document, provided by the user. Available for
         * "driver_license" and "identity_card". The file can be decrypted and verified using the accompanying EncryptedCredentials.
         */
        public PassportFile|null $reverseSide = null,

        /**
         * Optional. Encrypted file with the selfie of the user holding a document, provided by the user,
         * available for "passport", "driver_license", "identity_card" and "internal_passport".
         * The file can be decrypted and verified using the accompanying EncryptedCredentials.
         */
        public PassportFile|null $selfie = null,

        /**
         * Optional. Array of encrypted files with translated versions of documents provided by the user.
         * Available if requested for "passport", "driver_license", "identity_card", "internal_passport", "utility_bill",
         * "bank_statement", "rental_agreement", "passport_registration" and "temporary_registration" types.
         * Files can be decrypted and verified using the accompanying EncryptedCredentials.
         *
         * @var list<PassportFile>|null
         */
        #[ArrayType(PassportFile::class)]
        public array|null $translation = null,
    ) {
    }
}
