<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\Types\Update;

abstract class ArrayOfUpdates
{
    public static function fromResponse($data)
    {
        $arrayOfUpdates = [];
        foreach ($data as $update) {
            $arrayOfUpdates[] = Update::fromResponse($update);
        }

        return $arrayOfUpdates;
    }
}
