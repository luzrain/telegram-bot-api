<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;

final class ArrayOfArrayOfInlineKeyboardButton extends BaseArray implements ArrayTypeInterface
{
    public static function fromArray(array $data): array
    {
        return array_map(fn (array $array) => ArrayOfInlineKeyboardButton::fromArray($array), $data);
    }
}
