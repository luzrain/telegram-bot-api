<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\File;
use TelegramBot\Api\Types\InputFile;

/**
 * Use this method to upload a .PNG file with a sticker for later use in createNewStickerSet and addStickerToSet methods (can be used multiple times).
 * Returns the uploaded File on success.
 */
final class UploadStickerFile extends BaseMethod
{
    protected static string $methodName = 'uploadStickerFile';
    protected static string $responseClass = File::class;

    public function __construct(

        /**
         * User identifier of sticker file owner
         */
        protected int $userId,

        /**
         * PNG image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px,
         * and either width or height must be exactly 512px.
         */
        protected InputFile $pngSticker,
    ) {
    }
}
