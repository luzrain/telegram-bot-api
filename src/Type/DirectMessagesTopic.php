<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a topic of a direct messages chat.
 */
final readonly class DirectMessagesTopic extends Type
{
    protected function __construct(
        /**
         * Unique identifier of the topic. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
         * But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
         */
        public int $topicId,

        /**
         * Optional. Information about the user that created the topic. Currently, it is always present
         */
        public User|null $user = null,
    ) {
    }
}
