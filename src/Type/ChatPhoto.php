<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a chat photo.
 */
final class ChatPhoto extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * File identifier of small (160x160) chat photo.
         * This file_id can be used only for photo download and only for as long as the photo is not changed.
         */
        public string $smallFileId,

        /**
         * Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots.
         * Can't be used to download or reuse the file.
         */
        public string $smallFileUniqueId,

        /**
         * File identifier of big (640x640) chat photo.
         * This file_id can be used only for photo download and only for as long as the photo is not changed.
         */
        public string $bigFileId,

        /**
         * Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots.
         * Can't be used to download or reuse the file.
         */
        public string $bigFileUniqueId,
    ) {
    }
}
