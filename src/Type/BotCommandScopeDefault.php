<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents the default scope of bot commands. Default commands are used if no commands with a narrower scope are specified for the user.
 */
final readonly class BotCommandScopeDefault extends Type implements BotCommandScope
{
    /**
     * Scope type, must be default
     */
    public string $type;

    public function __construct()
    {
        $this->type = 'default';
    }
}
