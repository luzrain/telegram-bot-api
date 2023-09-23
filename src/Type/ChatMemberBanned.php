<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 */
final readonly class ChatMemberBanned extends ChatMember
{
    protected function __construct(
        /**
         * Information about the user
         */
        public User $user,

        /**
         * Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever
         */
        public int $untilDate,
    ) {
        parent::__construct('kicked');
    }
}
