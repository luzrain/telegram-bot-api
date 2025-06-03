<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a clickable area on a story media.
 */
final readonly class StoryArea extends Type
{
    protected function __construct(
        /**
         * Position of the area
         */
        public StoryAreaPosition $position,

        /**
         * Type of the area
         */
        public StoryAreaType $type,
    ) {
    }
}
