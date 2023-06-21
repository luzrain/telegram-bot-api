<?php

declare(strict_types=1);

namespace TelegramBot\Api\Test\Helper;

use TelegramBot\Api\BaseType;

final class TestBaseType extends BaseType
{
    protected static array $requiredParams = ['test1', 'test2'];
}
