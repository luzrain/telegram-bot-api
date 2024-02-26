<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a service message about an edited forum topic.
 */
final readonly class ForumTopicEdited extends Type
{
    protected function __construct(
        /**
         * Optional. New name of the topic, if it was edited
         */
        public string|null $name = null,

        /**
         * Optional. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed
         */
        public string|null $iconCustomEmojiId = null,
    ) {
    }
}
