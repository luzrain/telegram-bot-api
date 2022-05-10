<?php

namespace TelegramBot\Api\Types\Passport;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents a file uploaded to Telegram Passport.
 * Currently all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 */
class PassportFile extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'file_id',
        'file_unique_id',
        'file_size',
        'file_date',
    ];

    protected static array $map = [
        'file_id' => true,
        'file_unique_id' => true,
        'file_size' => true,
        'file_date' => true,
    ];

    /**
     * Identifier for this file, which can be used to download or reuse the file
     */
    protected string $fileId;

    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    protected string $fileUniqueId;

    /**
     * File size in bytes
     */
    protected int $fileSize;

    /**
     * Unix time when the file was uploaded
     */
    protected int $fileDate;

    public function getFileId(): string
    {
        return $this->fileId;
    }

    public function getFileUniqueId(): string
    {
        return $this->fileUniqueId;
    }

    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function getFileDate(): int
    {
        return $this->fileDate;
    }
}
