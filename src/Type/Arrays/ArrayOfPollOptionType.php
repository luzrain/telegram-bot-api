<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\PollOption;

final class ArrayOfPollOptionType extends ArrayType
{
    protected static string $type = PollOption::class;
}
