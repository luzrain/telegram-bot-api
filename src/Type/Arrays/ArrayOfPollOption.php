<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;
use Luzrain\TelegramBotApi\Type\PollOption;

final class ArrayOfPollOption extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = PollOption::class;
}
