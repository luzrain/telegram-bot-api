<?php

namespace TelegramBot\Api\Test\Types;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\MessageEntity;
use TelegramBot\Api\Types\User;

class MessageEntityTest extends TestCase
{
    public function testTextMentionFromResponse()
    {
        $messageEntity = MessageEntity::fromResponse([
            'type' => 'text_mention',
            'offset' => 108,
            'length' => 10,
            'user' => [
                'id' => 4815162342,
                'is_bot' => false,
                'first_name' => 'John',
                'last_name' => 'Locke',
                'username' => 'hunter',
                'language_code' => 'en',
            ],
        ]);

        $this->assertInstanceOf(MessageEntity::class, $messageEntity);
        $this->assertSame(MessageEntity::TYPE_TEXT_MENTION, $messageEntity->getType());
        $this->assertSame(108, $messageEntity->getOffset());
        $this->assertSame(10, $messageEntity->getLength());
        $this->assertNull($messageEntity->getUrl());
        $this->assertInstanceOf(User::class, $messageEntity->getUser());
        $this->assertSame(4815162342, $messageEntity->getUser()->getId());
        $this->assertFalse($messageEntity->getUser()->isBot());
        $this->assertSame('John', $messageEntity->getUser()->getFirstName());
        $this->assertSame('Locke', $messageEntity->getUser()->getLastName());
        $this->assertSame('hunter', $messageEntity->getUser()->getUsername());
        $this->assertSame('en', $messageEntity->getUser()->getLanguageCode());
        $this->assertNull($messageEntity->getLanguage());
    }

    public function testPreFromResponse()
    {
        $messageEntity = MessageEntity::fromResponse([
            'type' => 'pre',
            'offset' => 16,
            'length' => 128,
            'language' => 'php',
        ]);

        $this->assertInstanceOf(MessageEntity::class, $messageEntity);
        $this->assertSame(MessageEntity::TYPE_PRE, $messageEntity->getType());
        $this->assertSame(16, $messageEntity->getOffset());
        $this->assertSame(128, $messageEntity->getLength());
        $this->assertNull($messageEntity->getUrl());
        $this->assertNull($messageEntity->getUser());
        $this->assertSame('php', $messageEntity->getLanguage());
    }
}
