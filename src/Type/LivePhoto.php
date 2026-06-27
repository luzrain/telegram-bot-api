<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a live photo.
 */
final readonly class LivePhoto extends Type
{
    protected function __construct(
        /**
         * Identifier for the video file which can be used to download or reuse the file
         */
        public string $fileId,

        /**
         * Unique identifier for the video file which is supposed to be the same over time and for different bots.
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
         * Optional. Available sizes of the corresponding static photo
         *
         * @var list<PhotoSize>|null
         */
        #[ArrayType(PhotoSize::class)]
        public array|null $photo = null,

        /**
         * Optional. MIME type of the file as defined by the sender
         */
        public string|null $mimeType = null,

        /**
         * Optional. File size in bytes.
         */
        public int|null $fileSize = null,
    ) {
    }
}
