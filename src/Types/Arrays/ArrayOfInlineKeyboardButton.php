<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;
use Luzrain\TelegramBotApi\Types\InlineKeyboardButton;

final class ArrayOfInlineKeyboardButton extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = InlineKeyboardButton::class;
}
