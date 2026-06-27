<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to set a tag for a regular member in a group or a supergroup.
 * The bot must be an administrator in the chat for this to work and must have the can_manage_tags administrator right.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SetChatMemberTag extends Method
{
    protected static string $methodName = 'setChatMemberTag';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup in the format @username
         */
        protected int|string $chatId,

        /**
         * Unique identifier of the target user
         */
        protected int $userId,

        /**
         * New tag for the member; 0-16 characters, emoji are not allowed
         */
        protected string|null $tag = null,
    ) {
    }
}
