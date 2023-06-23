<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;

final class ArrayOfArrayOfPhotoSize extends BaseArray implements ArrayTypeInterface
{
    public static function fromResponse(array $data): array
    {
        return array_map(fn (array $array) => ArrayOfPhotoSize::fromResponse($array), $data);
    }
}
