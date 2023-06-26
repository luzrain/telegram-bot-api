<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a forum topic.
 */
final readonly class ForumTopic extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * Unique identifier of the forum topic
         */
        public int $messageThreadId,

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
