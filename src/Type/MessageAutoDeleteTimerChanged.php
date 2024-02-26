<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a service message about a change in auto-delete timer settings.
 */
final readonly class MessageAutoDeleteTimerChanged extends Type
{
    protected function __construct(
        /**
         * New auto-delete time for messages in the chat; in seconds
         */
        public int $messageAutoDeleteTime,
    ) {
    }
}
