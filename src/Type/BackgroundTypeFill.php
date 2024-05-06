<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The background is automatically filled based on the selected colors.
 */
final readonly class BackgroundTypeFill extends BackgroundType
{
    public const TYPE = 'fill';

    public function __construct(
        /**
         * The background fill
         */
        public BackgroundFill $fill,

        /**
         * Dimming of the background in dark themes, as a percentage; 0-100
         */
        public int $darkThemeDimming,
    ) {
        parent::__construct(self::TYPE);
    }
}
