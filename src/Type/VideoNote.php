<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a video message (available in Telegram apps as of v.4.0).
 */
final readonly class VideoNote extends Type
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
         * Video width and height (diameter of the video message) as defined by sender
         */
        public int $length,

        /**
         * Duration of the video in seconds as defined by sender
         */
        public int $duration,

        /**
         * Optional. Video thumbnail
         */
        public PhotoSize|null $thumbnail = null,

        /**
         * Optional. File size in bytes
         */
        public int|null $fileSize = null,
    ) {
    }
}
