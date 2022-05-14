<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\ArrayTypeInterface;
use TelegramBot\Api\Types\MessageEntity;

class ArrayOfMessageEntity extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = MessageEntity::class;
}
