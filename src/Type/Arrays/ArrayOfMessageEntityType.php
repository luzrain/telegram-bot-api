<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\MessageEntity;

final class ArrayOfMessageEntityType extends ArrayType
{
    protected static string $type = MessageEntity::class;
}
