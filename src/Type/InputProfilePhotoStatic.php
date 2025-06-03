<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * A static profile photo in the .JPG format.
 */
final readonly class InputProfilePhotoStatic extends InputProfilePhoto
{
    public const TYPE = 'static';

    protected function __construct(
        /**
         * The static profile photo. Profile photos can't be reused and can only be uploaded as a new file,
         * so you can pass "attach://<file_attach_name>" if the photo was uploaded using multipart/form-data under <file_attach_name>.
         *
         * @see https://core.telegram.org/bots/api#sending-files
         */
        public InputFile|string $photo,
    ) {
        parent::__construct(self::TYPE);
    }
}
