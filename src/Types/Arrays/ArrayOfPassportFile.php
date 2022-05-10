<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\Types\Payments\PassportFile;

abstract class ArrayOfPassportFile
{
    public static function fromResponse($data)
    {
        $array = [];

        foreach ($data as $item) {
            $array[] = PassportFile::fromResponse($item);
        }

        return $array;
    }
}
