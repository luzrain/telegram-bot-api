<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

/**
 * Represents the scope of bot commands, covering a specific chat.
 */
class BotCommandScopeChat extends BotCommandScope
{
    protected static array $map = [
        'type' => true,
        'chat_id' => true,
    ];

    /**
     * Scope type, must be chat
     */
    protected string $type = 'chat';

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
