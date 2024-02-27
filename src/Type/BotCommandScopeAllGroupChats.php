<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents the scope of bot commands, covering all group and supergroup chats.
 */
final readonly class BotCommandScopeAllGroupChats extends BotCommandScope
{
    public const TYPE = 'all_group_chats';

    public function __construct()
    {
        parent::__construct(self::TYPE);
    }
}
