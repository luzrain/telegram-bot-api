<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Test;

use Luzrain\TelegramBotApi\Exception\TelegramTypeException;
use Luzrain\TelegramBotApi\Test\Helper\TestTypeDenormalizable;
use PHPUnit\Framework\TestCase;

final class BaseTypeTest extends TestCase
{
    public function testValidate(): void
    {
        TestTypeDenormalizable::fromArray([
            'test1' => 1,
            'test2' => 2,
            'test3' => 3,
        ]);

        $this->addToAssertionCount(1);
    }

    public function testValidateFail(): void
    {
        $this->expectException(TelegramTypeException::class);

        TestTypeDenormalizable::fromArray([
            'test1' => 1,
        ]);
    }
}
