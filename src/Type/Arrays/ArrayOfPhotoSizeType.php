<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\PhotoSize;

final class ArrayOfPhotoSizeType extends ArrayType
{
    protected static string $type = PhotoSize::class;
}
