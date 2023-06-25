<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\Type\User;

final class ArrayOfUser extends BaseArray
{
    protected static string $type = User::class;
}
