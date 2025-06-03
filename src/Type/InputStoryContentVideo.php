<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Describes a video to post as a story.
 */
final readonly class InputStoryContentVideo extends InputStoryContent
{
    public const TYPE = 'video';

    protected function __construct(
        /**
         * The video to post as a story. The video must be of the size 720x1280, streamable, encoded with H.265 codec, with key frames added each second in the MPEG4 format, and must not exceed 30 MB.
         * The video can't be reused and can only be uploaded as a new file, so you can pass "attach://<file_attach_name>" if the video was uploaded using multipart/form-data under <file_attach_name>.
         *
         * @see https://core.telegram.org/bots/api#sending-files
         */
        public InputFile|string $video,

        /**
         * Optional. Precise duration of the video in seconds; 0-60
         */
        public float|null $duration = null,

        /**
         * Optional. Timestamp in seconds of the frame that will be used as the static cover for the story. Defaults to 0.0.
         */
        public float|null $coverFrameTimestamp = null,

        /**
         * Optional. Pass True if the video has no sound
         */
        public bool|null $isAnimation = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
