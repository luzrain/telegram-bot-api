<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;

/**
 * Represents an animation file (GIF or H.264/MPEG-4 AVC video without sound) to be sent.
 */
final readonly class InputMediaAnimation extends InputMedia
{
    public const TYPE = 'animation';

    public function __construct(
        /**
         * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended),
         * pass an HTTP URL for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>" to upload
         * a new one using multipart/form-data under <file_attach_name> name.
         *
         * @see https://core.telegram.org/bots/api#sending-files
         */
        public InputFile|string $media,

        /**
         * Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side.
         * The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320.
         * Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file,
         * so you can pass "attach://<file_attach_name>" if the thumbnail was uploaded using multipart/form-data under <file_attach_name>.
         *
         * @see https://core.telegram.org/bots/api#sending-files
         */
        public InputFile|string|null $thumbnail = null,

        /**
         * Optional. Caption of the animation to be sent, 0-1024 characters after entities parsing
         */
        public string|null $caption = null,

        /**
         * Optional. Mode for parsing entities in the animation caption. See formatting options for more details.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        public string|null $parseMode = null,

        /**
         * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $captionEntities = null,

        /**
         * Optional. Pass True, if the caption must be shown above the message media
         */
        public bool|null $showCaptionAboveMedia = null,

        /**
         * Optional. Animation width
         */
        public int|null $width = null,

        /**
         * Optional. Animation height
         */
        public int|null $height = null,

        /**
         * Optional. Animation duration in seconds
         */
        public int|null $duration = null,

        /**
         * Optional. Pass True if the animation needs to be covered with a spoiler animation
         */
        public bool|null $hasSpoiler = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
