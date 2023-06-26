<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\User;

final class ArrayOfUserType extends ArrayType
{
    protected static string $type = User::class;
}
