<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 */
final readonly class Animation extends Type
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
         * Optional. Animation thumbnail as defined by the sender
         */
        public PhotoSize|null $thumbnail = null,

        /**
         * Optional. Original animation filename as defined by the sender
         */
        public string|null $fileName = null,

        /**
         * Optional. MIME type of the file as defined by the sender
         */
        public string|null $mimeType = null,

        /**
         * Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it.
         * But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
         */
        public int|null $fileSize = null,
    ) {
    }
}
