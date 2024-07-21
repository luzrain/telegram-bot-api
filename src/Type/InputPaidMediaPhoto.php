<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The paid media to send is a photo.
 */
final readonly class InputPaidMediaPhoto extends InputPaidMedia
{
    public const TYPE = 'photo';

    protected function __construct(
        /**
         * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended),
         * pass an HTTP URL for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>" to upload
         * a new one using multipart/form-data under <file_attach_name> name.
         */
        public InputFile|string $media,
    ) {
        parent::__construct(self::TYPE);
    }
}
