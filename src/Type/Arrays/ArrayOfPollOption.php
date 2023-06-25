<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\Type\PollOption;

final class ArrayOfPollOption extends BaseArray
{
    protected static string $type = PollOption::class;
}
