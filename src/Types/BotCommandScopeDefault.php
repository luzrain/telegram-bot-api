<?php

namespace TelegramBot\Api\Types;

/**
 * Represents the default scope of bot commands. Default commands are used if no commands with a narrower scope are specified for the user.
 */
class BotCommandScopeDefault extends BotCommandScope
{
    protected static array $requiredParams = [
        'type',
    ];

    protected static array $map = [
        'type' => true,
    ];

    /**
     * Scope type, must be default
     */
    protected string $type;

    public static function create(): self
    {
        return new self(['type' => 'default']);
    }

    public function getType(): string
    {
        return $this->type;
    }
}
