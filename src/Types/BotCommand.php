<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents a bot command.
 */
class BotCommand extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'command',
        'description',
    ];

    protected static array $map = [
        'command' => true,
        'description' => true,
    ];

    /**
     * Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     */
    protected string $command;

    /**
     * Description of the command; 1-256 characters.
     */
    protected string $description;

    public function getCommand(): string
    {
        return $this->command;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
