<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a chat member that has no additional privileges or restrictions.
 */
final readonly class ChatMemberMember extends ChatMember
{
    protected function __construct(
        /**
         * Information about the user
         */
        public User $user,
    ) {
        parent::__construct('member');
    }
}
