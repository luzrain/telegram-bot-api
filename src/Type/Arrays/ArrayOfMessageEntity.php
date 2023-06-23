<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;
use Luzrain\TelegramBotApi\Type\MessageEntity;

final class ArrayOfMessageEntity extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = MessageEntity::class;
}
