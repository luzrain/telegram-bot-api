<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Test\Helper;

use Luzrain\TelegramBotApi\BaseType;

final class TestBaseType extends BaseType
{
    protected static array $requiredParams = ['test1', 'test2'];
}
