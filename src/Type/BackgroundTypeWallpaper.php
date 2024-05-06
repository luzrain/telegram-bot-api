<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The background is a wallpaper in the JPEG format.
 */
final readonly class BackgroundTypeWallpaper extends BackgroundType
{
    public const TYPE = 'wallpaper';

    public function __construct(
        /**
         * Document with the wallpaper
         */
        public Document $document,

        /**
         * Dimming of the background in dark themes, as a percentage; 0-100
         */
        public int $darkThemeDimming,

        /**
         * Optional. True, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12
         */
        public true|null $isBlurred = null,

        /**
         * Optional. True, if the background moves slightly when the device is tilted
         */
        public true|null $isMoving = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
