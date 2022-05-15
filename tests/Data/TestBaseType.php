<?php

declare(strict_types=1);

use TelegramBot\Api\BaseType;

class TestBaseType extends BaseType
{
    protected static array $requiredParams = ['test1', 'test2'];
}
