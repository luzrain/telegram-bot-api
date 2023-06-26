<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a menu button, which opens the bot's list of commands.
 */
final readonly class MenuButtonCommands extends MenuButton
{
    public function __construct(
        /**
         * Type of the button, must be commands
         */
        public string $type = 'commands',
    ) {
        if ($this->type !== 'commands') {
            throw new \InvalidArgumentException('type should be "commands"');
        }
        parent::__construct($this->type);
    }
}
