<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Passport;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\PropertyType;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfEncryptedPassportElement;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Describes Telegram Passport data shared with the bot by the user.
 */
final readonly class PassportData extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * Array with information about documents and other Telegram Passport elements that was shared with the bot
         *
         * @var list<EncryptedPassportElement>
         */
        #[PropertyType(ArrayOfEncryptedPassportElement::class)]
        public array $data,

        /**
         * Encrypted credentials required to decrypt the data
         */
        public EncryptedCredentials $credentials,
    ) {
    }
}
