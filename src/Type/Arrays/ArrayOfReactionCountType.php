<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\ReactionCount;

final class ArrayOfReactionCountType extends ArrayType
{
    protected static string $type = ReactionCount::class;
}
