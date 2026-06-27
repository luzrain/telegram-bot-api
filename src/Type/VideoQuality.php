<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a video file of a specific quality.
 */
final readonly class VideoQuality extends Type
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
         * Video width
         */
        public int $width,

        /**
         * Video height
         */
        public int $height,

        /**
         * Codec that was used to encode the video, for example, "h264", "h265", or "av01"
         */
        public string $codec,

        /**
         * Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it.
         * But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
         */
        public int|null $fileSize = null,
    ) {
    }
}
