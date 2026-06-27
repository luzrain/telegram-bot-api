<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object contains information about the bot that was created to be managed by the current bot.
 */
final readonly class ManagedBotCreated extends Type
{
    protected function __construct(
        /**
         * Information about the bot. The bot's token can be fetched using the method getManagedBotToken.
         */
        public User $bot,
    ) {
    }
}
