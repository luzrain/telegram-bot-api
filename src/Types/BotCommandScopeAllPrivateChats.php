<?php

namespace TelegramBot\Api\Types;

/**
 * Represents the scope of bot commands, covering all private chats.
 */
class BotCommandScopeAllPrivateChats extends BotCommandScope
{
    protected static array $map = [
        'type' => true,
    ];

    /**
     * Scope type, must be all_private_chats
     */
    protected string $type = 'all_private_chats';

    public static function create(): self
    {
        return new self();
    }

    public function getType(): string
    {
        return $this->type;
    }
}
