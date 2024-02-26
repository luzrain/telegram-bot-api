<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents the scope of bot commands, covering a specific chat.
 */
final readonly class BotCommandScopeChat extends BotCommandScope
{
    public const TYPE = 'chat';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
         */
        public int|string $chatId,
    ) {
        parent::__construct(self::TYPE);
    }
}
