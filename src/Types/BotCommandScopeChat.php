<?php

namespace TelegramBot\Api\Types;

/**
 * Represents the scope of bot commands, covering a specific chat.
 */
class BotCommandScopeChat extends BotCommandScope
{
    protected static array $requiredParams = [
        'type',
        'chat_id',
    ];

    protected static array $map = [
        'type' => true,
        'chat_id' => true,
    ];

    /**
     * Scope type, must be chat
     */
    protected string $type;

    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    protected int|string $chatId;

    public static function create(int|string $chatId): self
    {
        return new self([
            'type' => 'chat',
            'chat_id' => $chatId,
        ]);
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
