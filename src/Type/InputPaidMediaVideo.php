<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The paid media to send is a video.
 */
final readonly class InputPaidMediaVideo extends InputPaidMedia
{
    public const TYPE = 'video';

    protected function __construct(
        /**
         * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended),
         * pass an HTTP URL for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>" to upload
         * a new one using multipart/form-data under <file_attach_name> name.
         */
        public InputFile|string $media,

        /**
         * Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side.
         * The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320.
         * Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file,
         * so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>.
         */
        public InputFile|string|null $thumbnail = null,

        /**
         * Optional. Video width
         */
        public int|null $width = null,

        /**
         * Optional. Video height
         */
        public int|null $height = null,

        /**
         * Optional. Video duration in seconds
         */
        public int|null $duration = null,

        /**
         * Optional. Pass True if the uploaded video is suitable for streaming
         */
        public bool|null $supportsStreaming = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
