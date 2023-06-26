<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type\ChatMember;

final class ArrayOfChatMemberEntityType extends ArrayType
{
    protected static string $type = ChatMember::class;
}
