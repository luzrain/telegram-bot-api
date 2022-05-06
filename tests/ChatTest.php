<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\Chat;
use TelegramBot\Api\Types\ChatPhoto;

class ChatTest extends TestCase
{
    public function testFromResponseGroupChat()
    {
        $item = Chat::fromResponse([
            'id' => 1,
            'type' => 'group',
            'title' => 'test chat'
        ]);

        $this->assertInstanceOf(Chat::class, $item);
        $this->assertSame(1, $item->getId());
        $this->assertSame('test chat', $item->getTitle());
    }

    public function testGet64bitId()
    {
        $chat = new Chat();
        $chat->setId(2147483648);
        $this->assertSame(2147483648, $chat->getId());
    }

    public function testGetId()
    {
        $chat = new Chat();
        $chat->setId(1);
        $this->assertSame(1, $chat->getId());
    }

    public function testGetType()
    {
        $chat = new Chat();
        $chat->setType('private');
        $this->assertSame('private', $chat->getType());
    }

    public function testGetTitle()
    {
        $chat = new Chat();
        $chat->setTitle('test chat');
        $this->assertSame('test chat', $chat->getTitle());
    }

    public function testGetUsername()
    {
        $chat = new Chat();
        $chat->setUsername('iGusev');
        $this->assertSame('iGusev', $chat->getUsername());
    }

    public function testGetFirstName()
    {
        $chat = new Chat();
        $chat->setFirstName('Ilya');
        $this->assertSame('Ilya', $chat->getFirstName());
    }

    public function testGetLastName()
    {
        $chat = new Chat();
        $chat->setLastName('Gusev');
        $this->assertSame('Gusev', $chat->getLastName());
    }

    public function testGetPhoto()
    {
        $chat = new Chat();
        $photo = ChatPhoto::fromResponse([
            'small_file_id' => 'small_file_id',
            'big_file_id' => 'big_file_id'
        ]);
        $chat->setPhoto($photo);
        $this->assertSame($photo, $chat->getPhoto());
    }

    public function testGetBio()
    {
        $chat = new Chat();
        $chat->setBio('PHP Telegram Bot API');
        $this->assertSame('PHP Telegram Bot API', $chat->getBio());
    }

    public function testGetDescription()
    {
        $chat = new Chat();
        $chat->setDescription('description');
        $this->assertSame('description', $chat->getDescription());
    }

    public function testFromResponseUser()
    {
        $item = Chat::fromResponse([
            'first_name' => 'Ilya',
            'last_name' => 'Gusev',
            'id' => 123456,
            'username' => 'iGusev',
            'type' => 'private',
            'bio' => 'PHP Telegram Bot API'
        ]);

        $this->assertInstanceOf(Chat::class, $item);
        $this->assertSame(123456, $item->getId());
        $this->assertSame('Ilya', $item->getFirstName());
        $this->assertSame('Gusev', $item->getLastName());
        $this->assertSame('iGusev', $item->getUsername());
        $this->assertSame('PHP Telegram Bot API', $item->getBio());
    }

    public function testSetIdException1()
    {
        $this->expectException(InvalidArgumentException::class);

        $chat = new Chat();
        $chat->setId([]);
    }

    public function testSetIdException2()
    {
        $this->expectException(InvalidArgumentException::class);

        $chat = new Chat();
        $chat->setId(null);
    }

    public function testFromResponseException2()
    {
        $this->expectException(InvalidArgumentException::class);

        $chat = Chat::fromResponse([
            'id' => 1
        ]);
    }

    public function testFromResponseException3()
    {
        $this->expectException(InvalidArgumentException::class);

        $chat = Chat::fromResponse([
            'type' => 'private'
        ]);
    }
}
