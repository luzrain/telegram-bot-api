<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents the default scope of bot commands. Default commands are used if no commands with a narrower scope are specified for the user.
 */
final readonly class BotCommandScopeDefault extends BotCommandScope
{
    public const TYPE = 'default';

    public function __construct()
    {
        parent::__construct(self::TYPE);
    }
}
