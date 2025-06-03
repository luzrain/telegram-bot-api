<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the colors of the backdrop of a unique gift.
 */
final readonly class UniqueGiftBackdropColors extends Type
{
    public function __construct(
        /**
         * The color in the center of the backdrop in RGB format
         */
        public int $centerColor,

        /**
         * The color on the edges of the backdrop in RGB format
         */
        public int $edgeColor,

        /**
         * The color to be applied to the symbol in RGB format
         */
        public int $symbolColor,

        /**
         * The color for the text on the backdrop in RGB format
         */
        public int $textColor,
    ) {
    }
}
