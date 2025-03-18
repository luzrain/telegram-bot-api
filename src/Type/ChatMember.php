<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:
 *
 * @see ChatMemberOwner
 * @see ChatMemberAdministrator
 * @see ChatMemberMember
 * @see ChatMemberRestricted
 * @see ChatMemberLeft
 * @see ChatMemberBanned
 */
readonly class ChatMember extends Type
{
    protected function __construct(
        /**
         * The member's status in the chat
         */
        public string $status,
    ) {
    }

    /**
     * @psalm-suppress LessSpecificReturnStatement
     * @psalm-suppress MoreSpecificReturnType
     */
    public static function fromArray(array $data): static
    {
        $instance = parent::fromArray($data);

        return self::class !== static::class ? $instance : match ($instance->status) {
            ChatMemberOwner::STATUS => ChatMemberOwner::fromArray($data),
            ChatMemberAdministrator::STATUS => ChatMemberAdministrator::fromArray($data),
            ChatMemberMember::STATUS => ChatMemberMember::fromArray($data),
            ChatMemberRestricted::STATUS => ChatMemberRestricted::fromArray($data),
            ChatMemberLeft::STATUS => ChatMemberLeft::fromArray($data),
            ChatMemberBanned::STATUS => ChatMemberBanned::fromArray($data),
        };
    }
}
