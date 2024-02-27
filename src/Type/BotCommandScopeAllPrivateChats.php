<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents the scope of bot commands, covering all private chats.
 */
final readonly class BotCommandScopeAllPrivateChats extends BotCommandScope
{
    public const TYPE = 'all_private_chats';

    public function __construct()
    {
        parent::__construct(self::TYPE);
    }
}
