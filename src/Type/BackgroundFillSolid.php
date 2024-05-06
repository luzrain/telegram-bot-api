<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The background is filled using the selected color.
 */
final readonly class BackgroundFillSolid extends BackgroundFill
{
    public const TYPE = 'solid';

    public function __construct(
        /**
         * The color of the background fill in the RGB24 format
         */
        public int $color,
    ) {
        parent::__construct(self::TYPE);
    }
}
