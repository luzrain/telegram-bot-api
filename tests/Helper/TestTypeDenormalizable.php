<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Test\Helper;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

final readonly class TestTypeDenormalizable extends Type implements TypeDenormalizable
{
    protected function __construct(
        public int $test1,
        public int $test2,
        public int|null $test3 = null,
    ) {
    }
}
