<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a chat member that owns the chat and has all administrator privileges.
 */
final readonly class ChatMemberOwner extends ChatMember
{
    public const STATUS = 'creator';

    protected function __construct(
        /**
         * Information about the user
         */
        public User $user,

        /**
         * True, if the user's presence in the chat is hidden
         */
        public bool $isAnonymous,

        /**
         * Optional. Custom title for this user
         */
        public string|null $customTitle = null,
    ) {
        parent::__construct(self::STATUS);
    }
}
