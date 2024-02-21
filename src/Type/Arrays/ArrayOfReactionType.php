<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\ReactionType;

final class ArrayOfReactionType extends ArrayType
{
    protected static string $type = ReactionType::class;
}
