<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;

/**
 * Represents the scope of bot commands, covering a specific chat.
 */
final readonly class BotCommandScopeChat extends BaseType implements BotCommandScope
{
    /**
     * Scope type, must be chat
     */
    public string $type;

    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     */
    public int|string $chatId;

    public function __construct(int|string $chatId)
    {
        $this->type = 'chat';
        $this->chatId = $chatId;
    }
}
