<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\Types\Payments\LabeledPrice;

abstract class ArrayOfLabeledPrice
{
    public static function fromResponse($data)
    {
        $array = [];

        foreach ($data as $item) {
            $array[] = LabeledPrice::fromResponse($item);
        }

        return $array;
    }
}
