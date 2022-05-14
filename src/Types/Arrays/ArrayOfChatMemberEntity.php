<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\ArrayTypeInterface;
use TelegramBot\Api\Types\ChatMember;

class ArrayOfChatMemberEntity extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = ChatMember::class;
}
