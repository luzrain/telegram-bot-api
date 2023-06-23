<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

/**
 * Represents a menu button, which opens the bot's list of commands.
 */
class MenuButtonCommands extends MenuButton
{
    protected static array $requiredParams = [
        'type',
    ];

    protected static array $map = [
        'type' => true,
    ];

    /**
     * Type of the button, must be commands
     */
    protected string $type = 'commands';

    public static function create(): self
    {
        return new self();
    }

    public function getType(): string
    {
        return $this->type;
    }
}
