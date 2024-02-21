<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\ChatBoost;

final class ArrayOfChatBoostType extends ArrayType
{
    protected static string $type = ChatBoost::class;
}
