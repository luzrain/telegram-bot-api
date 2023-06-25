<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents the bot's short description.
 */
final class BotShortDescription extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * The bot's short description
         */
        public string $shortDescription,
    ) {
    }
}
