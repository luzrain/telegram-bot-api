<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

/**
 * Represents the scope of bot commands, covering all group and supergroup chat administrators.
 */
class BotCommandScopeAllChatAdministrators extends BotCommandScope
{
    protected static array $map = [
        'type' => true,
    ];

    /**
     * Scope type, must be all_chat_administrators
     */
    protected string $type = 'all_chat_administrators';

    public static function create(): self
    {
        return new self();
    }

    public function getType(): string
    {
        return $this->type;
    }
}
