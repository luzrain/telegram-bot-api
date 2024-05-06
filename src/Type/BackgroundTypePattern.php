<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The background is a PNG or TGV (gzipped subset of SVG with MIME type "application/x-tgwallpattern")
 * pattern to be combined with the background fill chosen by the user.
 */
final readonly class BackgroundTypePattern extends BackgroundType
{
    public const TYPE = 'pattern';

    public function __construct(
        /**
         * Document with the pattern
         */
        public Document $document,

        /**
         * The background fill that is combined with the pattern
         */
        public BackgroundFill $fill,

        /**
         * Intensity of the pattern when it is shown above the filled background; 0-100
         */
        public int $intensity,

        /**
         * Optional. True, if the background fill must be applied only to the pattern itself.
         * All other pixels are black in this case. For dark themes only
         */
        public true|null $isInverted = null,

        /**
         * Optional. True, if the background moves slightly when the device is tilted
         */
        public true|null $isMoving = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
