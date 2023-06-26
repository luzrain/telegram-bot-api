<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents the scope of bot commands, covering all group and supergroup chats.
 */
final readonly class BotCommandScopeAllGroupChats extends Type implements BotCommandScope
{
    /**
     * Scope type, must be all_group_chats
     */
    public string $type;

    public function __construct()
    {
        $this->type = 'all_group_chats';
    }
}
