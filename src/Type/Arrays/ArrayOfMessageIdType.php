<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\MessageId;

final class ArrayOfMessageIdType extends ArrayType
{
    protected static string $type = MessageId::class;
}
