<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\Types\ChatMember;

abstract class ArrayOfChatMemberEntity
{
    public static function fromResponse($data)
    {
        $arrayOfChatMemberEntity = [];
        foreach ($data as $chatMemberEntity) {
            $arrayOfChatMemberEntity[] = ChatMember::fromResponse($chatMemberEntity);
        }

        return $arrayOfChatMemberEntity;
    }
}
