<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
 */
final readonly class BotCommandScopeChatMember extends Type implements BotCommandScope
{
    /**
     * Scope type, must be chat_member
     */
    public string $type;

    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    public int|string $chatId;

    /**
     * Unique identifier of the target user
     */
    public int $userId;

    public function __construct(int|string $chatId, int $userId)
    {
        $this->type = 'chat_member';
        $this->chatId = $chatId;
        $this->userId = $userId;
    }
}
