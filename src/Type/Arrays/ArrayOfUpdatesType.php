<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\Update;

final class ArrayOfUpdatesType extends ArrayType
{
    protected static string $type = Update::class;
}
