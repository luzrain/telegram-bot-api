<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents the scope of bot commands, covering all administrators of a specific group or supergroup chat.
 */
final readonly class BotCommandScopeChatAdministrators extends Type implements BotCommandScope
{
    /**
     * Scope type, must be chat_administrators
     */
    public string $type;

    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    public int|string $chatId;

    public function __construct(int|string $chatId)
    {
        $this->type = 'chat_administrators';
        $this->chatId = $chatId;
    }
}
