<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\ArrayTypeInterface;
use TelegramBot\Api\Types\InlineKeyboardButton;

class ArrayOfInlineKeyboardButton extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = InlineKeyboardButton::class;
}
