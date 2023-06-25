<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

final class ArrayOfArrayOfInlineKeyboardButton extends BaseArray
{
    public static function fromArray(array $data): array
    {
        return array_map(fn (array $array) => ArrayOfInlineKeyboardButton::fromArray($array), $data);
    }
}
