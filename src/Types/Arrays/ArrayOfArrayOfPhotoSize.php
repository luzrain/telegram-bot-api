<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\ArrayTypeInterface;

class ArrayOfArrayOfPhotoSize extends BaseArray implements ArrayTypeInterface
{
    public static function fromResponse(array $data): array
    {
        return array_map(fn (array $array) => ArrayOfPhotoSize::fromResponse($array), $data);
    }
}
