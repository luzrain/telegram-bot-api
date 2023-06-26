<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a service message about a video chat ended in the chat.
 */
final readonly class VideoChatEnded extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Video chat duration in seconds
         */
        public int $duration,
    ) {
    }
}
