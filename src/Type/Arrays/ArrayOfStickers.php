<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\Type\Stickers\Sticker;

final class ArrayOfStickers extends BaseArray
{
    protected static string $type = Sticker::class;
}
