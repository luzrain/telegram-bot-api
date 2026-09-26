<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents a sticker file to be sent.
 */
final readonly class InputMediaSticker extends Type implements InputPollOptionMedia
{
    public const TYPE = 'sticker';

    public string $type;

    public function __construct(
        /**
         * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended),
         * pass an HTTP URL for Telegram to get a .WEBP sticker from the Internet, or pass "attach://<file_attach_name>"
         * to upload a new .WEBP, .TGS, or .WEBM sticker using multipart/form-data under <file_attach_name> name.
         */
        public InputFile|string $media,

        /**
         * Optional. Emoji associated with the sticker; only for just uploaded stickers
         */
        public string|null $emoji = null,
    ) {
        $this->type = self::TYPE;
    }
}
