<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 */
final readonly class Document extends Type
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
         * Optional. Document thumbnail as defined by sender
         */
        public PhotoSize|null $thumbnail = null,

        /**
         * Optional. Original filename as defined by sender
         */
        public string|null $fileName = null,

        /**
         * Optional. MIME type of the file as defined by sender
         */
        public string|null $mimeType = null,

        /**
         * Optional. File size in bytes
         */
        public int|null $fileSize = null,
    ) {
    }
}
