<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\Types\Message;

abstract class ArrayOfMessages
{
    public static function fromResponse($data)
    {
        $arrayOfMessages = [];
        foreach ($data as $message) {
            $arrayOfMessages[] = Message::fromResponse($message);
        }

        return $arrayOfMessages;
    }
}
