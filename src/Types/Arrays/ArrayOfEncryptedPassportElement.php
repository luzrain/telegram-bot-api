<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\Types\Payments\EncryptedPassportElement;

abstract class ArrayOfEncryptedPassportElement
{
    public static function fromResponse($data)
    {
        $array = [];

        foreach ($data as $item) {
            $array[] = EncryptedPassportElement::fromResponse($item);
        }

        return $array;
    }
}
