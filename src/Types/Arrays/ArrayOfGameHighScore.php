<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\Types\Games\GameHighScore;

abstract class ArrayOfGameHighScore
{
    public static function fromResponse($data)
    {
        $array = [];

        foreach ($data as $entity) {
            $array[] = GameHighScore::fromResponse($entity);
        }

        return $array;
    }
}
