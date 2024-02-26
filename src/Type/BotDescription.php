<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents the bot's description.
 */
final readonly class BotDescription extends Type
{
    protected function __construct(
        /**
         * The bot's description
         */
        public string $description,
    ) {
    }
}
