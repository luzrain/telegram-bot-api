<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

/**
 * Represents the scope of bot commands, covering all group and supergroup chats.
 */
class BotCommandScopeAllGroupChats extends BotCommandScope
{
    protected static array $map = [
        'type' => true,
    ];

    /**
     * Scope type, must be all_group_chats
     */
    protected string $type = 'all_group_chats';

    public static function create(): self
    {
        return new self();
    }

    public function getType(): string
    {
        return $this->type;
    }
}
