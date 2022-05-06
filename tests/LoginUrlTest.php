<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\LoginUrl;

class LoginUrlTest extends TestCase
{
    public function testGetUrl(): void
    {
        $loginUrl = new LoginUrl();
        $loginUrl->setUrl('https://telegram.org');

        $this->assertSame('https://telegram.org', $loginUrl->getUrl());
    }

    public function testGetForwardText(): void
    {
        $loginUrl = new LoginUrl();
        $loginUrl->setForwardText('Log in!');

        $this->assertSame('Log in!', $loginUrl->getForwardText());
    }

    public function testGetBotUsername(): void
    {
        $loginUrl = new LoginUrl();
        $loginUrl->setBotUsername('TestBot');

        $this->assertSame('TestBot', $loginUrl->getBotUsername());
    }

    public function testGetRequestWriteAccess(): void
    {
        $loginUrl = new LoginUrl();
        $loginUrl->setRequestWriteAccess(true);

        $this->assertTrue($loginUrl->isRequestWriteAccess());
    }

    public function testFromResponse(): void
    {
        $loginUrl = LoginUrl::fromResponse([
            'url' => 'https://telegram.org',
            'forward_text' => 'Log in!',
            'bot_username' => 'TestBot',
            'request_write_access' => true,
        ]);

        $this->assertInstanceOf(LoginUrl::class, $loginUrl);
        $this->assertSame('https://telegram.org', $loginUrl->getUrl());
        $this->assertSame('Log in!', $loginUrl->getForwardText());
        $this->assertSame('TestBot', $loginUrl->getBotUsername());
        $this->assertTrue($loginUrl->isRequestWriteAccess());
    }
}
