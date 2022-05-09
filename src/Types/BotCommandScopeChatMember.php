<?php

namespace TelegramBot\Api\Types;

/**
 * Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
 */
class BotCommandScopeChatMember extends BotCommandScope
{
    protected static array $requiredParams = [
        'type',
        'chat_id',
        'user_id',
    ];

    protected static array $map = [
        'type' => true,
        'chat_id' => true,
        'user_id' => true,
    ];

    /**
     * Scope type, must be chat_member
     */
    protected string $type;

    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    protected int|string $chatId;

    /**
     * Unique identifier of the target user
     */
    protected int $userId;

    public static function create(int|string $chatId, int $userId): self
    {
        return new self([
            'type' => 'chat_member',
            'chat_id' => $chatId,
            'user_id' => $userId,
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

    public function getUserId(): int
    {
        return $this->userId;
    }
}
