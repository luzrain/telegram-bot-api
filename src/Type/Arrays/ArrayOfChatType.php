<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\Chat;

final class ArrayOfChatType extends ArrayType
{
    protected static string $type = Chat::class;
}
