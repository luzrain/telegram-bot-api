<?php

namespace TelegramBot\Api\Types;

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
    protected string $type;

    public function getType(): string
    {
        return $this->type;
    }
}
