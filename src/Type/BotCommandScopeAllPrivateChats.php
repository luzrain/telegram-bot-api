<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents the scope of bot commands, covering all private chats.
 */
final readonly class BotCommandScopeAllPrivateChats extends Type implements BotCommandScope
{
    /**
     * Scope type, must be all_private_chats
     */
    public string $type;

    public function __construct()
    {
        $this->type = 'all_private_chats';
    }
}
