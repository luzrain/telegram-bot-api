<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;

/**
 * Represents the default scope of bot commands. Default commands are used if no commands with a narrower scope are specified for the user.
 */
final readonly class BotCommandScopeDefault extends BaseType implements BotCommandScope
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
