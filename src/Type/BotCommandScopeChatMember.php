<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
 */
final readonly class BotCommandScopeChatMember extends BotCommandScope
{
    public const TYPE = 'chat_member';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
         */
        public int|string $chatId,

        /**
         * Unique identifier of the target user
         */
        public int $userId,
    ) {
        parent::__construct(self::TYPE);
    }
}
