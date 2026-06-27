<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The paid media to send is a live photo.
 */
final readonly class InputPaidMediaLivePhoto extends InputPaidMedia
{
    public const TYPE = 'live_photo';

    public function __construct(
        /**
         * Video of the live photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended)
         * or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name.
         * Sending live photos by a URL is currently unsupported.
         */
        public InputFile|string $media,

        /**
         * The static photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended)
         * or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name.
         * Sending live photos by a URL is currently unsupported.
         */
        public InputFile|string $photo,
    ) {
        parent::__construct(self::TYPE);
    }
}
