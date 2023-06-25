<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\Type\InlineKeyboardButton;

final class ArrayOfInlineKeyboardButton extends BaseArray
{
    protected static string $type = InlineKeyboardButton::class;
}
