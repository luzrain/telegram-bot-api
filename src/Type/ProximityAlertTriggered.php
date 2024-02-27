<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 */
final readonly class ProximityAlertTriggered extends Type
{
    protected function __construct(
        /**
         * User that triggered the alert
         */
        public User $traveler,

        /**
         * User that set the alert
         */
        public User $watcher,

        /**
         * The distance between the users
         */
        public int $distance,
    ) {
    }
}
