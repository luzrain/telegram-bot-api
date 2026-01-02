<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the background of a gift.
 */
final readonly class GiftBackground extends Type
{
    public function __construct(
        /**
         * Center color of the background in RGB format
         */
        public int $centerColor,

        /**
         * Edge color of the background in RGB format
         */
        public int $edgeColor,

        /**
         * Text color of the background in RGB format
         */
        public int $textColor,
    ) {
    }
}
