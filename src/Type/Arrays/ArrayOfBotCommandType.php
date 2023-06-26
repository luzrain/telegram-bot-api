<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\BotCommand;

final class ArrayOfBotCommandType extends ArrayType
{
    protected static string $type = BotCommand::class;
}
