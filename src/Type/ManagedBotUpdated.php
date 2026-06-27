<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object contains information about the creation, token update, or owner update of a bot that is managed by the current bot.
 */
final readonly class ManagedBotUpdated extends Type
{
    protected function __construct(
        /**
         * User that created the bot
         */
        public User $user,

        /**
         * Information about the bot. Token of the bot can be fetched using the method getManagedBotToken.
         */
        public User $bot,
    ) {
    }
}
