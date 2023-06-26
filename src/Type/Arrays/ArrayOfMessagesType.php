<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\Message;

final class ArrayOfMessagesType extends ArrayType
{
    protected static string $type = Message::class;
}
