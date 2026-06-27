<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The paid media is a live photo.
 */
final readonly class PaidMediaLivePhoto extends PaidMedia
{
    public const TYPE = 'live_photo';

    protected function __construct(
        /**
         * The photo
         */
        public LivePhoto $livePhoto,
    ) {
        parent::__construct(self::TYPE);
    }
}
