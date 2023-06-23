<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

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
class ChatMember extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'status',
    ];

    protected static array $map = [
        'status' => true,
    ];

    /**
     * The member's status in the chat
     */
    protected string $status;

    public static function fromResponse(array $data): self
    {
        $instance = parent::fromResponse($data);

        if (self::class !== static::class) {
            return $instance;
        }

        return match ($instance->status) {
            'creator' => ChatMemberOwner::fromResponse($data),
            'administrator' => ChatMemberAdministrator::fromResponse($data),
            'member' => ChatMemberMember::fromResponse($data),
            'restricted' => ChatMemberRestricted::fromResponse($data),
            'left' => ChatMemberLeft::fromResponse($data),
            'kicked' => ChatMemberBanned::fromResponse($data),
        };
    }
}
