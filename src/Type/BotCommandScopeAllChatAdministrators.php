<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents the scope of bot commands, covering all group and supergroup chat administrators.
 */
final readonly class BotCommandScopeAllChatAdministrators extends BotCommandScope
{
    public const TYPE = 'all_chat_administrators';

    public function __construct()
    {
        parent::__construct(self::TYPE);
    }
}
