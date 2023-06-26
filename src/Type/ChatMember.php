<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

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
readonly class ChatMember extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * The member's status in the chat
         */
        public string $status,
    ) {
    }

    /**
     * @psalm-suppress UndefinedPropertyFetch
     * @psalm-suppress UnhandledMatchCondition
     * @psalm-suppress LessSpecificReturnStatement
     * @psalm-suppress MoreSpecificReturnType
     */
    public static function fromArray(array $data): static
    {
        $instance = parent::fromArray($data);

        if (self::class !== static::class) {
            return $instance;
        }

        return match ($instance->status) {
            'creator' => ChatMemberOwner::fromArray($data),
            'administrator' => ChatMemberAdministrator::fromArray($data),
            'member' => ChatMemberMember::fromArray($data),
            'restricted' => ChatMemberRestricted::fromArray($data),
            'left' => ChatMemberLeft::fromArray($data),
            'kicked' => ChatMemberBanned::fromArray($data),
        };
    }
}
