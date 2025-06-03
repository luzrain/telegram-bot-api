<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * An animated profile photo in the MPEG4 format.
 */
final readonly class InputProfilePhotoAnimated extends InputProfilePhoto
{
    public const TYPE = 'animated';

    protected function __construct(
        /**
         * The animated profile photo. Profile photos can't be reused and can only be uploaded as a new file, so you can pass "attach://<file_attach_name>"
         * if the photo was uploaded using multipart/form-data under <file_attach_name>.
         *
         * @see https://core.telegram.org/bots/api#sending-files
         */
        public InputFile|string $animation,

        /**
         * Optional. Timestamp in seconds of the frame that will be used as the static profile photo. Defaults to 0.0.
         */
        public float|null $mainFrameTimestamp = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
