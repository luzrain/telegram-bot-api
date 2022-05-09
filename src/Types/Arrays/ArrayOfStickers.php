<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\Types\Stickers\Sticker;

class ArrayOfStickers
{
    public static function fromResponse($data)
    {
        $array = [];

        foreach ($data as $item) {
            $array[] = Sticker::fromResponse($item);
        }

        return $array;
    }
}
