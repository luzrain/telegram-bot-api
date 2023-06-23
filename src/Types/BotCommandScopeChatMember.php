<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

/**
 * Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
 */
final class BotCommandScopeChatMember extends BotCommandScope
{
    protected static array $map = [
        'type' => true,
        'chat_id' => true,
        'user_id' => true,
    ];

    /**
     * Scope type, must be chat_member
     */
    protected string $type = 'chat_member';

    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    protected int|string $chatId;

    /**
     * Unique identifier of the target user
     */
    protected int $userId;

    public static function create(
        int|string $chatId,
        int $userId,
    ): self {
        $instance = new self();
        $instance->chatId = $chatId;
        $instance->userId = $userId;

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

    public function getUserId(): int
    {
        return $this->userId;
    }
}
