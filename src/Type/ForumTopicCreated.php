<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a service message about a new forum topic created in the chat.
 */
final readonly class ForumTopicCreated extends Type
{
    protected function __construct(
        /**
         * Name of the topic
         */
        public string $name,

        /**
         * Color of the topic icon in RGB format
         */
        public int $iconColor,

        /**
         * Optional. Unique identifier of the custom emoji shown as the topic icon
         */
        public string|null $iconCustomEmojiId = null,
    ) {
    }
}
