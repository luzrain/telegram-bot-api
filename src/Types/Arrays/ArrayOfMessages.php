<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;
use Luzrain\TelegramBotApi\Types\Message;

final class ArrayOfMessages extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = Message::class;
}
