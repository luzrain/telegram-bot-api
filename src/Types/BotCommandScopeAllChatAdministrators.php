<?php

namespace TelegramBot\Api\Types;

/**
 * Represents the scope of bot commands, covering all group and supergroup chat administrators.
 */
class BotCommandScopeAllChatAdministrators extends BotCommandScope
{
    protected static array $requiredParams = [
        'type',
    ];

    protected static array $map = [
        'type' => true,
    ];

    /**
     * Scope type, must be all_chat_administrators
     */
    protected string $type;

    public static function create(): self
    {
        return new self(['type' => 'all_chat_administrators']);
    }

    public function getType(): string
    {
        return $this->type;
    }
}
