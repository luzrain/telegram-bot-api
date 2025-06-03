<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Describes a photo to post as a story.
 */
final readonly class InputStoryContentPhoto extends InputStoryContent
{
    public const TYPE = 'photo';

    protected function __construct(
        /**
         * The photo to post as a story. The photo must be of the size 1080x1920 and must not exceed 10 MB. The photo can't be reused and can only be uploaded as a new file,
         * so you can pass "attach://<file_attach_name>" if the photo was uploaded using multipart/form-data under <file_attach_name>.
         *
         * @see https://core.telegram.org/bots/api#sending-files
         */
        public InputFile|string $photo,
    ) {
        parent::__construct(self::TYPE);
    }
}
