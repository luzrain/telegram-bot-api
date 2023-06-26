<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\File;
use Luzrain\TelegramBotApi\Type\InputFile;

/**
 * Use this method to upload a file with a sticker for later use in the createNewStickerSet
 * and addStickerToSet methods (the file can be used multiple times).
 * Returns the uploaded File on success.
 *
 * @extends Method<File>
 */
final class UploadStickerFile extends Method
{
    protected static string $methodName = 'uploadStickerFile';
    protected static string $responseClass = File::class;

    public function __construct(
        /**
         * User identifier of sticker file owner
         */
        protected int $userId,

        /**
         * A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format.
         * See https://core.telegram.org/stickers for technical requirements. More information on Sending Files »
         *
         * @see https://core.telegram.org/bots/api#sending-files
         */
        protected InputFile $sticker,

        /**
         * Format of the sticker, must be one of “static”, “animated”, “video”
         */
        protected string $stickerFormat,
    ) {
    }
}
