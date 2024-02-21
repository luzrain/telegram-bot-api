<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;

final class ArrayOfArrayOfPhotoSizeType extends ArrayType
{
    public static function fromArray(array $data): array
    {
        return \array_map(fn(array $array) => ArrayOfPhotoSizeType::fromArray($array), $data);
    }
}
