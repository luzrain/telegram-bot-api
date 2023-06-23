<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;
use Luzrain\TelegramBotApi\Types\MessageEntity;

class ArrayOfMessageEntity extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = MessageEntity::class;
}
