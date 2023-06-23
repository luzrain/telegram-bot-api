<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;

final class ArrayOfArrayOfInlineKeyboardButton extends BaseArray implements ArrayTypeInterface
{
    public static function fromResponse(array $data): array
    {
        return array_map(fn (array $array) => ArrayOfInlineKeyboardButton::fromResponse($array), $data);
    }
}
