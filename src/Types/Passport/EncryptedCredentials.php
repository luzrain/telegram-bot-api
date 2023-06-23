<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Passport;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Contains data required for decrypting and authenticating EncryptedPassportElement.
 * See the Telegram Passport Documentation for a complete description of the data decryption and authentication processes.
 */
final class EncryptedCredentials extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'data',
        'hash',
        'secret',
    ];

    protected static array $map = [
        'data' => true,
        'hash' => true,
        'secret' => true,
    ];

    /**
     * Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication
     */
    protected string $data;

    /**
     * Base64-encoded data hash for data authentication
     */
    protected string $hash;

    /**
     * Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
     */
    protected string $secret;

    public function getData(): string
    {
        return $this->data;
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }
}
