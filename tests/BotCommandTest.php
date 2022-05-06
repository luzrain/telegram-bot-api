<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\BotCommand;

class BotCommandTest extends TestCase
{
    public function testGetCommand(): void
    {
        $item = new BotCommand();
        $item->setCommand('start');
        $this->assertSame('start', $item->getCommand());
    }

    public function testGetDescription(): void
    {
        $item = new BotCommand();
        $item->setDescription('This is a start command!');
        $this->assertSame('This is a start command!', $item->getDescription());
    }

    public function testFromResponse(): void
    {
        $botCommand = BotCommand::fromResponse(
            [
                'command' => 'start',
                'description' => 'This is a start command!',
            ],
        );

        $this->assertInstanceOf(BotCommand::class, $botCommand);
        $this->assertSame('start', $botCommand->getCommand());
        $this->assertSame('This is a start command!', $botCommand->getDescription());
    }
}
