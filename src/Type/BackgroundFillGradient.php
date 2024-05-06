<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The background is a gradient fill.
 */
final readonly class BackgroundFillGradient extends BackgroundFill
{
    public const TYPE = 'gradient';

    public function __construct(
        /**
         * Top color of the gradient in the RGB24 format
         */
        public int $topColor,

        /**
         * Bottom color of the gradient in the RGB24 format
         */
        public int $bottomColor,

        /**
         * Clockwise rotation angle of the background fill in degrees; 0-359
         */
        public int $rotationAngle,
    ) {
        parent::__construct(self::TYPE);
    }
}
