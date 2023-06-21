<?php

declare(strict_types=1);

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Exceptions\TelegramTypeException;
use TelegramBot\Api\Test\Helper\TestBaseType;

final class BaseTypeTest extends TestCase
{
    public function testValidate(): void
    {
        TestBaseType::fromResponse([
            'test1' => 1,
            'test2' => 2,
            'test3' => 3,
        ]);

        $this->addToAssertionCount(1);
    }

    public function testValidateFail(): void
    {
        $this->expectException(TelegramTypeException::class);

        TestBaseType::fromResponse([
            'test1' => 1,
        ]);
    }
}
