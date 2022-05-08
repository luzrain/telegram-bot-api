<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\Types\MessageEntity;

abstract class ArrayOfMessageEntity
{
    public static function fromResponse($data)
    {
        $arrayOfMessageEntity = [];
        foreach ($data as $messageEntity) {
            $arrayOfMessageEntity[] = MessageEntity::fromResponse($messageEntity);
        }

        return $arrayOfMessageEntity;
    }
}
