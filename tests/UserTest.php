<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\User;

class UserTest extends TestCase
{
    public function testGetId(): void
    {
        $item = new User();
        $item->setId(1);
        $this->assertSame(1, $item->getId());
    }

    public function testGet64bitId(): void
    {
        $item = new User();
        $item->setId(2147483648);
        $this->assertSame(2147483648, $item->getId());
    }

    public function testGetFirstName(): void
    {
        $item = new User();
        $item->setFirstName('Ilya');
        $this->assertSame('Ilya', $item->getFirstName());
    }

    public function testGetLastName(): void
    {
        $item = new User();
        $item->setLastName('Gusev');
        $this->assertSame('Gusev', $item->getLastName());
    }

    public function testGetUsername(): void
    {
        $item = new User();
        $item->setUsername('iGusev');
        $this->assertSame('iGusev', $item->getUsername());
    }

    public function testSetIdException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new User();
        $item->setId('s');
    }

    public function testFromResponse(): void
    {
        $user = User::fromResponse([
            'first_name' => 'Ilya',
            'last_name' => 'Gusev',
            'id' => 123456,
            'username' => 'iGusev',
        ]);
        $this->assertInstanceOf(User::class, $user);
        $this->assertSame(123456, $user->getId());
        $this->assertSame('Ilya', $user->getFirstName());
        $this->assertSame('Gusev', $user->getLastName());
        $this->assertSame('iGusev', $user->getUsername());
    }

    public function testFromResponseException1(): void
    {
        $this->expectException(InvalidArgumentException::class);

        User::fromResponse([
            'last_name' => 'Gusev',
            'id' => 123456,
            'username' => 'iGusev',
        ]);
    }

    public function testFromResponseException2(): void
    {
        $this->expectException(InvalidArgumentException::class);

        User::fromResponse([
            'first_name' => 'Ilya',
            'last_name' => 'Gusev',
            'username' => 'iGusev',
        ]);
    }

}
