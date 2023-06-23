<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;
use Luzrain\TelegramBotApi\Type\BotCommand;

final class ArrayOfBotCommand extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = BotCommand::class;
}
