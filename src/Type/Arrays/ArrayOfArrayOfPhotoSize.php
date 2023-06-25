<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

final class ArrayOfArrayOfPhotoSize extends BaseArray
{
    public static function fromArray(array $data): array
    {
        return array_map(fn (array $array) => ArrayOfPhotoSize::fromArray($array), $data);
    }
}
