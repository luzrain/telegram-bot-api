<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Exceptions\InvalidArgumentException;
use TestBaseType;


class BaseTypeTest extends TestCase
{
    public function setUp(): void
    {
        include_once('tests/_fixtures/TestBaseType.php');
    }

    public function testValidate(): void
    {
        $this->assertTrue(TestBaseType::validate(['test1' => 1, 'test2' => 2, 'test3' => 3]));
    }

    public function testValidateFail(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->assertTrue(TestBaseType::validate(['test1' => 1]));
    }
}
