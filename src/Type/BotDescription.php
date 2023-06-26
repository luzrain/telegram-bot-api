<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents the bot's description.
 */
final readonly class BotDescription extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * The bot's description
         */
        public string $description,
    ) {
    }
}
