<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;
use Luzrain\TelegramBotApi\Type\Stickers\Sticker;

final class ArrayOfStickers extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = Sticker::class;
}
