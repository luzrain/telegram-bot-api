<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents the scope of bot commands, covering all administrators of a specific group or supergroup chat.
 */
final readonly class BotCommandScopeChatAdministrators extends BotCommandScope
{
    public const TYPE = 'chat_administrators';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
         */
        public int|string $chatId,
    ) {
        parent::__construct(self::TYPE);
    }
}
