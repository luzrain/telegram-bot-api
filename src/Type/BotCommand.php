<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a bot command.
 */
final class BotCommand extends BaseType implements TypeInterface
{
    public function __construct(
        /**
         * Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
         */
        public string $command,

        /**
         * Description of the command; 1-256 characters.
         */
        public string $description,
    ) {
    }
}
