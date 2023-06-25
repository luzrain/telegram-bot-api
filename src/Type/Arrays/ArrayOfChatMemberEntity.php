<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Arrays;

use Luzrain\TelegramBotApi\Type\ChatMember;

final class ArrayOfChatMemberEntity extends BaseArray
{
    protected static string $type = ChatMember::class;
}
