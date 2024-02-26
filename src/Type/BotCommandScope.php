<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
 *
 * @see BotCommandScopeDefault
 * @see BotCommandScopeAllPrivateChats
 * @see BotCommandScopeAllGroupChats
 * @see BotCommandScopeAllChatAdministrators
 * @see BotCommandScopeChat
 * @see BotCommandScopeChatAdministrators
 * @see BotCommandScopeChatMember
 */
readonly class BotCommandScope extends Type
{
    protected function __construct(
        /**
         * Scope type
         */
        public string $type,
    ) {
    }

    /**
     * @psalm-suppress LessSpecificReturnStatement
     * @psalm-suppress MoreSpecificReturnType
     */
    public static function fromArray(array $data): static
    {
        /** @var self $instance */
        $instance = parent::fromArray($data);

        return self::class !== static::class ? $instance : match ($instance->type) {
            BotCommandScopeDefault::TYPE => BotCommandScopeDefault::fromArray($data),
            BotCommandScopeAllPrivateChats::TYPE => BotCommandScopeAllPrivateChats::fromArray($data),
            BotCommandScopeAllGroupChats::TYPE => BotCommandScopeAllGroupChats::fromArray($data),
            BotCommandScopeAllChatAdministrators::TYPE => BotCommandScopeAllChatAdministrators::fromArray($data),
            BotCommandScopeChat::TYPE => BotCommandScopeChat::fromArray($data),
            BotCommandScopeChatAdministrators::TYPE => BotCommandScopeChatAdministrators::fromArray($data),
            BotCommandScopeChatMember::TYPE => BotCommandScopeChatMember::fromArray($data),
        };
    }
}
