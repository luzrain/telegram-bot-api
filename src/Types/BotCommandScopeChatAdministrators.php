<?php

namespace TelegramBot\Api\Types;

/**
 * Represents the scope of bot commands, covering all administrators of a specific group or supergroup chat.
 */
class BotCommandScopeChatAdministrators extends BotCommandScope
{
    protected static array $map = [
        'type' => true,
        'chat_id' => true,
    ];

    /**
     * Scope type, must be chat_administrators
     */
    protected string $type = 'chat_administrators';

    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    protected int|string $chatId;

    public static function create(int|string $chatId): self
    {
        $instance = new self();
        $instance->chatId = $chatId;

        return $instance;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getChatId(): int|string
    {
        return $this->chatId;
    }
}
