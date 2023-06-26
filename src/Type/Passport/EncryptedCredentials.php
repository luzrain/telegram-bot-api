<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * Describes data required for decrypting and authenticating EncryptedPassportElement.
 * See the Telegram Passport Documentation for a complete description of the data decryption and authentication processes.
 */
final readonly class EncryptedCredentials extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Base64-encoded encrypted JSON-serialized data with unique user's payload,
         * data hashes and secrets required for EncryptedPassportElement decryption and authentication
         */
        public string $data,

        /**
         * Base64-encoded data hash for data authentication
         */
        public string $hash,

        /**
         * Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
         */
        public string $secret,
    ) {
    }
}
