<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents one size of a photo or a file / sticker thumbnail.
 */
final readonly class PhotoSize extends Type
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
         * Photo width
         */
        public int $width,

        /**
         * Photo height
         */
        public int $height,

        /**
         * Optional. File size in bytes
         */
        public int|null $fileSize = null,
    ) {
    }
}
