<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\InputFile;
use TelegramBot\Api\Types\Stickers\MaskPosition;

/**
 * Use this method to add a new sticker to a set created by the bot.
 * You must use exactly one of the fields png_sticker, tgs_sticker, or webm_sticker.
 * Animated stickers can be added to animated sticker sets and only to them. Animated sticker sets can have up to 50 stickers.
 * Static sticker sets can have up to 120 stickers. Returns True on success.
 */
final class AddStickerToSet extends BaseMethod
{
    protected static string $methodName = 'addStickerToSet';

    public function __construct(

        /**
         * User identifier of sticker set owner
         */
        protected int $userId,

        /**
         * Sticker set name
         */
        protected string $name,

        /**
         * One or more emoji corresponding to the sticker
         */
        protected string $emojis,

        /**
         * PNG image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px,
         * and either width or height must be exactly 512px. Pass a file_id as a String to send a file that already exists on the Telegram servers,
         * pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data.
         */
        protected InputFile|string|null $pngSticker = null,

        /**
         * TGS animation with the sticker, uploaded using multipart/form-data.
         * See https://core.telegram.org/stickers#animated-sticker-requirements for technical requirements
         */
        protected InputFile|null $tgsSticker = null,

        /**
         * WEBM video with the sticker, uploaded using multipart/form-data.
         * See https://core.telegram.org/stickers#video-sticker-requirements for technical requirements
         */
        protected InputFile|null $webmSticker = null,

        /**
         * A JSON-serialized object for position where the mask should be placed on faces
         */
        protected MaskPosition|null $maskPosition = null,
    ) {
    }
}
