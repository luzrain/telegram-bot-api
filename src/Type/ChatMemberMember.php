<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a chat member that has no additional privileges or restrictions.
 */
final readonly class ChatMemberMember extends ChatMember
{
    public const STATUS = 'member';

    protected function __construct(
        /**
         * Information about the user
         */
        public User $user,

        /**
         * Optional. Date when the user's subscription will expire; Unix time
         */
        public int|null $untilDate = null,
    ) {
        parent::__construct(self::STATUS);
    }
}
