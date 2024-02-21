<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;

final class ArrayOfArrayOfInlineKeyboardButtonType extends ArrayType
{
    public static function fromArray(array $data): array
    {
        return \array_map(fn(array $array) => ArrayOfInlineKeyboardButtonType::fromArray($array), $data);
    }
}
