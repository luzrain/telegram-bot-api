<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\ArrayTypeInterface;
use TelegramBot\Api\Types\User;

class ArrayOfUser extends BaseArray implements ArrayTypeInterface
{
    protected static string $type = User::class;
}
