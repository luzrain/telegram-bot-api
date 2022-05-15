<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents a chat photo.
 */
class ChatPhoto extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'small_file_id',
        'small_file_unique_id',
        'big_file_id',
        'big_file_unique_id',
    ];

    protected static array $map = [
        'small_file_id' => true,
        'small_file_unique_id' => true,
        'big_file_id' => true,
        'big_file_unique_id' => true,
    ];

    /**
     * File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
     */
    protected string $smallFileId;

    /**
     * Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots.
     * Can't be used to download or reuse the file.
     */
    protected string $smallFileUniqueId;

    /**
     * File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
     */
    protected string $bigFileId;

    /**
     * Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots.
     * Can't be used to download or reuse the file.
     */
    protected string $bigFileUniqueId;

    public function getSmallFileId(): string
    {
        return $this->smallFileId;
    }

    public function getSmallFileUniqueId(): string
    {
        return $this->smallFileUniqueId;
    }

    public function getBigFileId(): string
    {
        return $this->bigFileId;
    }

    public function getBigFileUniqueId(): string
    {
        return $this->bigFileUniqueId;
    }
}
