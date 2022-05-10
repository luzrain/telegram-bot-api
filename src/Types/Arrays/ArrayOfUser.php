<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\Types\User;

abstract class ArrayOfUser
{
    public static function fromResponse($data)
    {
        $arrayOfUsers = [];
        foreach ($data as $user) {
            $arrayOfUsers[] = User::fromResponse($user);
        }

        return $arrayOfUsers;
    }
}
