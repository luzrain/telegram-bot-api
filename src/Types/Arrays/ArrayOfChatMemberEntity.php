<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Arrays;

use Luzrain\TelegramBotApi\ArrayTypeInterface;
use Luzrain\TelegramBotApi\Types\ChatMember;

final class ArrayOfChatMemberEntity extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = ChatMember::class;
}
