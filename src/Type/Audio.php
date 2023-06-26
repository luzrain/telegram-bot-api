<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents an audio file to be treated as music by the Telegram clients.
 */
final readonly class Audio extends BaseType implements TypeInterface
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
         * Duration of the audio in seconds as defined by sender
         */
        public int $duration,

        /**
         * Optional. Performer of the audio as defined by sender or by audio tags
         */
        public string|null $performer = null,

        /**
         * Optional. Title of the audio as defined by sender or by audio tags
         */
        public string|null $title = null,

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

        /**
         * Optional. Thumbnail of the album cover to which the music file belongs
         */
        public PhotoSize|null $thumbnail = null,
    ) {
    }
}
