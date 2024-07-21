<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The paid media is a video.
 */
final readonly class PaidMediaVideo extends PaidMedia
{
    public const TYPE = 'video';

    protected function __construct(
        /**
         * The video
         */
        public Video $video,
    ) {
        parent::__construct(self::TYPE);
    }
}
