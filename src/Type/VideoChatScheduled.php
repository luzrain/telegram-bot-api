<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a service message about a video chat scheduled in the chat.
 */
final readonly class VideoChatScheduled extends Type
{
    protected function __construct(
        /**
         * Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator
         */
        public int $startDate,
    ) {
    }
}
