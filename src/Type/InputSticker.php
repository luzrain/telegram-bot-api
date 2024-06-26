<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Stickers\MaskPosition;

/**
 * This object describes a sticker to be added to a sticker set.
 */
final readonly class InputSticker extends Type
{
    public function __construct(
        /**
         * The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers,
         * pass an HTTP URL as a String for Telegram to get a file from the Internet, upload a new one using multipart/form-data,
         * or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name.
         */
        public InputFile|string $sticker,

        /**
         * Format of the added sticker, must be one of "static" for a .WEBP or .PNG image, "animated" for a .TGS animation, "video" for a WEBM video
         */
        public string $format,

        /**
         * List of 1-20 emoji associated with the sticker
         *
         * @var list<string>
         */
        public array $emojiList,

        /**
         * Optional. Position where the mask should be placed on faces. For "mask" stickers only.
         */
        public MaskPosition|null $maskPosition = null,

        /**
         * Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters.
         * For "regular" and "custom_emoji" stickers only.
         *
         * @var list<string>|null
         */
        public array|null $keywords = null,
    ) {
    }
}
