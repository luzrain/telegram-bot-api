<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents the bot's short description.
 */
final readonly class BotShortDescription extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * The bot's short description
         */
        public string $shortDescription,
    ) {
    }
}
