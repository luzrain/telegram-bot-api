<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\InputFile;
use TelegramBot\Api\Types\Stickers\MaskPosition;

/**
 * Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created.
 * You must use exactly one of the fields png_sticker, tgs_sticker, or webm_sticker. Returns True on success.
 */
final class CreateNewStickerSet extends BaseMethod
{
    protected static string $methodName = 'createNewStickerSet';

    public function __construct(

        /**
         * User identifier of created sticker set owner
         */
        protected int $userId,

        /**
         * Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g., animals).
         * Can contain only english letters, digits and underscores. Must begin with a letter,
         * can't contain consecutive underscores and must end in "_by_<bot_username>". <bot_username> is case insensitive. 1-64 characters.
         */
        protected string $name,

        /**
         * Sticker set title, 1-64 characters
         */
        protected string $title,

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
         * Pass True, if a set of mask stickers should be created
         */
        protected bool|null $containsMasks = null,

        /**
         * A JSON-serialized object for position where the mask should be placed on faces
         */
        protected MaskPosition|null $maskPosition = null,
    ) {
    }
}
