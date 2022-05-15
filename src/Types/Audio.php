<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents an audio file to be treated as music by the Telegram clients.
 */
class Audio extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'file_id',
        'file_unique_id',
        'duration',
    ];

    protected static array $map = [
        'file_id' => true,
        'file_unique_id' => true,
        'duration' => true,
        'performer' => true,
        'title' => true,
        'file_name' => true,
        'mime_type' => true,
        'file_size' => true,
        'thumb' => PhotoSize::class,
    ];

    /**
     * Identifier for this file, which can be used to download or reuse the file
     */
    protected string $fileId;

    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots.
     * Can't be used to download or reuse the file.
     */
    protected string $fileUniqueId;

    /**
     * Duration of the audio in seconds as defined by sender
     */
    protected int $duration;

    /**
     * Optional. Performer of the audio as defined by sender or by audio tags
     */
    protected ?string $performer = null;

    /**
     * Optional. Title of the audio as defined by sender or by audio tags
     */
    protected ?string $title = null;

    /**
     * Optional. Original filename as defined by sender
     */
    protected ?string $fileName = null;

    /**
     * Optional. MIME type of the file as defined by sender
     */
    protected ?string $mimeType = null;

    /**
     * Optional. File size in bytes
     */
    protected ?int $fileSize = null;

    /**
     * Optional. Thumbnail of the album cover to which the music file belongs
     */
    protected ?PhotoSize $thumb = null;

    public function getFileId(): string
    {
        return $this->fileId;
    }

    public function getFileUniqueId(): string
    {
        return $this->fileUniqueId;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getPerformer(): ?string
    {
        return $this->performer;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }
}
