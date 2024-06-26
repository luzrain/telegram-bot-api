<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a story.
 */
final readonly class Story extends Type
{
    public function __construct(
        /**
         * Chat that posted the story
         */
        public Chat $chat,

        /**
         * Unique identifier for the story in the chat
         */
        public int $id,
    ) {
    }
}
