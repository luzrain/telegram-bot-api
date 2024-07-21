<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The paid media isn't available before the payment.
 */
final readonly class PaidMediaPreview extends PaidMedia
{
    public const TYPE = 'preview';

    protected function __construct(
        /**
         * Optional. Media width as defined by the sender
         */
        public int|null $width = null,

        /**
         * Optional. Media height as defined by the sender
         */
        public int|null $height = null,

        /**
         * Optional. Duration of the media in seconds as defined by the sender
         */
        public int|null $duration = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
