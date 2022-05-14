<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\ArrayTypeInterface;
use TelegramBot\Api\Types\Stickers\Sticker;

class ArrayOfStickers extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = Sticker::class;
}
