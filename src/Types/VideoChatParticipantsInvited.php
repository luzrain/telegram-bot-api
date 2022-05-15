<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
use TelegramBot\Api\Types\Arrays\ArrayOfUser;

/**
 * This object represents a service message about new members invited to a video chat.
 */
class VideoChatParticipantsInvited extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'users',
    ];

    protected static array $map = [
        'users' => ArrayOfUser::class,
    ];

    /**
     * New members that were invited to the video chat
     *
     * @var User[]
     */
    protected array $users;

    /**
     * @return User[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }
}
