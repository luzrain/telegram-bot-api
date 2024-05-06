<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a chat background.
 */
final readonly class ChatBackground extends Type
{
    protected function __construct(
        /**
         * Type of the background
         */
        public BackgroundType $type,
    ) {
    }
}
