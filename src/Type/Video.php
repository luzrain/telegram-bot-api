<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a video file.
 */
final readonly class Video extends Type
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
         * Video width as defined by the sender
         */
        public int $width,

        /**
         * Video height as defined by the sender
         */
        public int $height,

        /**
         * Duration of the video in seconds as defined by the sender
         */
        public int $duration,

        /**
         * Optional. Video thumbnail
         */
        public PhotoSize|null $thumbnail = null,

        /**
         * Optional. Available sizes of the cover of the video in the message
         *
         * @var list<PhotoSize>|null
         */
        #[ArrayType(PhotoSize::class)]
        public array|null $cover = null,

        /**
         * Optional. Timestamp in seconds from which the video will play in the message
         */
        public int|null $startTimestamp = null,

        /**
         * Optional. Original filename as defined by the sender
         */
        public string|null $fileName = null,

        /**
         * Optional. MIME type of the file as defined by the sender
         */
        public string|null $mimeType = null,

        /**
         * Optional. File size in bytes
         */
        public int|null $fileSize = null,
    ) {
    }
}
