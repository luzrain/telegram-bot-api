<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Test\Helper;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

final class TestBaseType extends BaseType implements TypeInterface
{
    protected function __construct(
        public int $test1,
        public int $test2,
        public int|null $test3 = null,
    ) {
    }
}
