<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\Stickers\Sticker;

final class ArrayOfStickersType extends ArrayType
{
    protected static string $type = Sticker::class;
}
