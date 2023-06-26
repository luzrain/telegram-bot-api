<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a bot command.
 */
final readonly class BotCommand extends Type implements TypeDenormalizable
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
