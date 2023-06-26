<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents the bot's name.
 */
final readonly class BotName extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * The bot's name
         */
        public string $name,
    ) {
    }
}
