<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a menu button, which opens the bot's list of commands.
 */
final readonly class MenuButtonCommands extends MenuButton
{
    public const TYPE = 'commands';

    public function __construct()
    {
        parent::__construct(self::TYPE);
    }
}
