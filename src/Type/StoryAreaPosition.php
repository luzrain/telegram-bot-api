<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes the position of a clickable area within a story.
 */
final readonly class StoryAreaPosition extends Type
{
    protected function __construct(
        /**
         * The abscissa of the area's center, as a percentage of the media width
         */
        public float $xPercentage,

        /**
         * The ordinate of the area's center, as a percentage of the media height
         */
        public float $yPercentage,

        /**
         * The width of the area's rectangle, as a percentage of the media width
         */
        public float $widthPercentage,

        /**
         * The height of the area's rectangle, as a percentage of the media height
         */
        public float $heightPercentage,

        /**
         * The clockwise rotation angle of the rectangle, in degrees; 0-360
         */
        public float $rotationAngle,

        /**
         * The radius of the rectangle corner rounding, as a percentage of the media width
         */
        public float $cornerRadiusPercentage,
    ) {
    }
}
