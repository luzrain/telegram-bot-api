<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents the bot's name.
 */
final class BotName extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * The bot's name
         */
        public string $name,
    ) {
    }
}
