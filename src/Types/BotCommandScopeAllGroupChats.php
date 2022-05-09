<?php

namespace TelegramBot\Api\Types;

/**
 * Represents the scope of bot commands, covering all group and supergroup chats.
 */
class BotCommandScopeAllGroupChats extends BotCommandScope
{
    protected static array $requiredParams = [
        'type',
    ];

    protected static array $map = [
        'type' => true,
    ];

    /**
     * Scope type, must be all_group_chats
     */
    protected string $type;

    public static function create(): self
    {
        return new self(['type' => 'all_group_chats']);
    }

    public function getType(): string
    {
        return $this->type;
    }
}
