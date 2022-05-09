<?php

namespace TelegramBot\Api\Types;

/**
 * Represents the scope of bot commands, covering all private chats.
 */
class BotCommandScopeAllPrivateChats extends BotCommandScope
{
    protected static array $requiredParams = [
        'type',
    ];

    protected static array $map = [
        'type' => true,
    ];

    /**
     * Scope type, must be all_private_chats
     */
    protected string $type;

    public static function create(): self
    {
        return new self(['type' => 'all_private_chats']);
    }

    public function getType(): string
    {
        return $this->type;
    }
}
