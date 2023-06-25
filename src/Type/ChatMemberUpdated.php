<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents changes in the status of a chat member.
 */
final class ChatMemberUpdated extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * Chat the user belongs to
         */
        public Chat $chat,

        /**
         * Performer of the action, which resulted in the change
         */
        public User $from,

        /**
         * Date the change was done in Unix time
         */
        public int $date,

        /**
         * Previous information about the chat member
         */
        public ChatMember $oldChatMember,

        /**
         * New information about the chat member
         */
        public ChatMember $newChatMember,

        /**
         * Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
         */
        public ChatInviteLink|null $inviteLink = null,

        /**
         * Optional. True, if the user joined the chat via a chat folder invite link
         */
        public bool|null $viaChatFolderInviteLink = null,
    ) {
    }
}
