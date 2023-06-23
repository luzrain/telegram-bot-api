<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Passport;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;
use Luzrain\TelegramBotApi\Types\Arrays\ArrayOfEncryptedPassportElement;

/**
 * Contains information about Telegram Passport data shared with the bot by the user.
 */
final class PassportData extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'data',
        'credentials',
    ];

    protected static array $map = [
        'data' => ArrayOfEncryptedPassportElement::class,
        'credentials' => EncryptedCredentials::class,
    ];

    /**
     * Array with information about documents and other Telegram Passport elements that was shared with the bot
     *
     * @var EncryptedPassportElement[]
     */
    protected array $data;

    /**
     * Encrypted credentials required to decrypt the data
     */
    protected EncryptedCredentials $credentials;

    /**
     * @return EncryptedPassportElement[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    public function getCredentials(): EncryptedCredentials
    {
        return $this->credentials;
    }
}
