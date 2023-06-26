<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\BaseArray;
use Luzrain\TelegramBotApi\Type\MessageEntity;

final class ArrayOfMessageEntity extends BaseArray
{
    protected static string $type = MessageEntity::class;
}
