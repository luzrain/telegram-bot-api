<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

/**
 * Represents the default scope of bot commands. Default commands are used if no commands with a narrower scope are specified for the user.
 */
class BotCommandScopeDefault extends BotCommandScope
{
    protected static array $map = [
        'type' => true,
    ];

    /**
     * Scope type, must be default
     */
    protected string $type = 'default';

    public static function create(): self
    {
        return new self();
    }

    public function getType(): string
    {
        return $this->type;
    }
}
