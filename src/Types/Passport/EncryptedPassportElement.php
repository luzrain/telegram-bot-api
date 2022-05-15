<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Passport;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
use TelegramBot\Api\Types\Arrays\ArrayOfPassportFile;

/**
 * Contains information about documents or other Telegram Passport elements shared with the bot by the user.
 */
class EncryptedPassportElement extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'type',
        'hash',
    ];

    protected static array $map = [
        'type' => true,
        'data' => true,
        'phone_number' => true,
        'email' => true,
        'files' => ArrayOfPassportFile::class,
        'front_side' => PassportFile::class,
        'reverse_side' => PassportFile::class,
        'selfie' => PassportFile::class,
        'translation' => ArrayOfPassportFile::class,
        'hash' => true,
    ];

    /**
     * Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”,
     * “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
     */
    protected string $type;

    /**
     * Optional. Base64-encoded encrypted Telegram Passport element data provided by the user, available for
     * “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types.
     * Can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    protected ?string $data = null;

    /**
     * Optional. User's verified phone number, available only for “phone_number” type
     */
    protected ?string $phoneNumber = null;

    /**
     * Optional. User's verified email address, available only for “email” type
     */
    protected ?string $email = null;

    /**
     * Optional. Array of encrypted files with documents provided by the user, available for “utility_bill”,
     * “bank_statement”,“rental_agreement”, “passport_registration” and “temporary_registration” types.
     * Files can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    protected ?array $files = null;

    /**
     * Optional. Encrypted file with the front side of the document, provided by the user.
     * Available for “passport”, “driver_license”, “identity_card” and “internal_passport”.
     * The file can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    protected ?PassportFile $frontSide = null;

    /**
     * Optional. Encrypted file with the reverse side of the document, provided by the user. Available for
     * “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    protected ?PassportFile $reverseSide = null;

    /**
     * Optional. Encrypted file with the selfie of the user holding a document, provided by the user;
     * available for “passport”, “driver_license”, “identity_card” and “internal_passport”.
     * The file can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    protected ?PassportFile $selfie = null;

    /**
     * Optional. Array of encrypted files with translated versions of documents provided by the user.
     * Available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”,
     * “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types.
     * Files can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    protected ?array $translation = null;

    /**
     * Base64-encoded element hash for using in PassportElementErrorUnspecified
     */
    protected string $hash;

    public function getType(): string
    {
        return $this->type;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getFiles(): ?array
    {
        return $this->files;
    }

    public function getFrontSide(): ?PassportFile
    {
        return $this->frontSide;
    }

    public function getReverseSide(): ?PassportFile
    {
        return $this->reverseSide;
    }

    public function getSelfie(): ?PassportFile
    {
        return $this->selfie;
    }

    public function getTranslation(): ?array
    {
        return $this->translation;
    }

    public function getHash(): string
    {
        return $this->hash;
    }
}
