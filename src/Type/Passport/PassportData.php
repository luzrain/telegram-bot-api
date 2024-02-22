<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * Describes Telegram Passport data shared with the bot by the user.
 */
final readonly class PassportData extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Array with information about documents and other Telegram Passport elements that was shared with the bot
         *
         * @var list<EncryptedPassportElement>
         */
        #[ArrayType(EncryptedPassportElement::class)]
        public array $data,

        /**
         * Encrypted credentials required to decrypt the data
         */
        public EncryptedCredentials $credentials,
    ) {
    }
}
