<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\InlineKeyboardButton;

final class ArrayOfInlineKeyboardButtonType extends ArrayType
{
    protected static string $type = InlineKeyboardButton::class;
}
