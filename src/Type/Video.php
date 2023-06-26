<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a video file.
 */
final readonly class Video extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * Identifier for this file, which can be used to download or reuse the file
         */
        public string $fileId,

        /**
         * Unique identifier for this file, which is supposed to be the same over time and for different bots.
         * Can't be used to download or reuse the file.
         */
        public string $fileUniqueId,

        /**
         * Video width as defined by sender
         */
        public int $width,

        /**
         * Video height as defined by sender
         */
        public int $height,

        /**
         * Duration of the video in seconds as defined by sender
         */
        public int $duration,

        /**
         * Optional. Video thumbnail
         */
        public PhotoSize|null $thumbnail = null,

        /**
         * Optional. Original filename as defined by sender
         */
        public string|null $fileName = null,

        /**
         * Optional. Mime type of a file as defined by sender
         */
        public string|null $mimeType = null,

        /**
         * Optional. File size in bytes
         */
        public int|null $fileSize = null,
    ) {
    }
}
