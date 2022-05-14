<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\ArrayTypeInterface;

class ArrayOfArrayOfInlineKeyboardButton extends BaseArray implements ArrayTypeInterface
{
    public static function fromResponse(array $data): array
    {
        return array_map(fn (array $array) => ArrayOfInlineKeyboardButton::fromResponse($array), $data);
    }
}
