<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;

final class ArrayOfArrayOfPhotoSize extends BaseArray implements ArrayTypeInterface
{
    public static function fromArray(array $data): array
    {
        return array_map(fn (array $array) => ArrayOfPhotoSize::fromArray($array), $data);
    }
}
