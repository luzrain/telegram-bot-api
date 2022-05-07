<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Client;
use TelegramBot\Api\Test\ClosureTest;
use TelegramBot\Api\Types\Update;

class ClientTest extends TestCase
{
    private Client $client;

    public function clientWebhookData(): iterable
    {
        yield ['command', $this->getDataFile('events/command.json')];
        yield ['message', $this->getDataFile('events/message.json')];
        yield ['editedMessage', $this->getDataFile('events/editedMessage.json')];
        yield ['channelPost', $this->getDataFile('events/channelPost.json')];
        yield ['editedChannelPost', $this->getDataFile('events/editedChannelPost.json')];
        yield ['inlineQuery', $this->getDataFile('events/inlineQuery.json')];
        yield ['chosenInlineResult', $this->getDataFile('events/chosenInlineResult.json')];
        yield ['callbackQuery', $this->getDataFile('events/callbackQuery.json')];
        yield ['shippingQuery', $this->getDataFile('events/shippingQuery.json')];
        yield ['preCheckoutQuery', $this->getDataFile('events/preCheckoutQuery.json')];
    }

    public function setUp(): void
    {
        $this->client = new Client();
    }

    private function getDataFile(string $file): string
    {
        return file_get_contents(__DIR__ . '/data/' . $file);
    }

    /**
     * @dataProvider clientWebhookData
     */
    public function testClientWebhook(string $eventName, string $requestBody): void
    {
        $commandClosure = new ClosureTest();
        $messageClosure = new ClosureTest();
        $wrongCommandClosure = new ClosureTest();
        $editedMessageClosure = new ClosureTest();
        $channelPostClosure = new ClosureTest();
        $editedChannelPostClosure = new ClosureTest();
        $inlineQueryClosure = new ClosureTest();
        $chosenInlineResultClosure = new ClosureTest();
        $callbackQueryClosure = new ClosureTest();
        $shippingQueryClosure = new ClosureTest();
        $preCheckoutQueryClosure = new ClosureTest();

        $this->client
            ->command('/testcommand', $commandClosure->getClosure())
            ->command('/wrongcommand', $wrongCommandClosure->getClosure())
            ->message($messageClosure->getClosure())
            ->editedMessage($editedMessageClosure->getClosure())
            ->channelPost($channelPostClosure->getClosure())
            ->editedChannelPost($editedChannelPostClosure->getClosure())
            ->inlineQuery($inlineQueryClosure->getClosure())
            ->chosenInlineResult($chosenInlineResultClosure->getClosure())
            ->callbackQuery($callbackQueryClosure->getClosure())
            ->shippingQuery($shippingQueryClosure->getClosure())
            ->preCheckoutQuery($preCheckoutQueryClosure->getClosure())
            ->run($requestBody);
        ;

        $this->assertSame($eventName === 'command', $commandClosure->isCalled());
        $this->assertFalse($wrongCommandClosure->isCalled());
        $this->assertSame($eventName === 'message', $messageClosure->isCalled());
        $this->assertSame($eventName === 'editedMessage', $editedMessageClosure->isCalled());
        $this->assertSame($eventName === 'channelPost', $channelPostClosure->isCalled());
        $this->assertSame($eventName === 'editedChannelPost', $editedChannelPostClosure->isCalled());
        $this->assertSame($eventName === 'inlineQuery', $inlineQueryClosure->isCalled());
        $this->assertSame($eventName === 'chosenInlineResult', $chosenInlineResultClosure->isCalled());
        $this->assertSame($eventName === 'callbackQuery', $callbackQueryClosure->isCalled());
        $this->assertSame($eventName === 'shippingQuery', $shippingQueryClosure->isCalled());
        $this->assertSame($eventName === 'preCheckoutQuery', $preCheckoutQueryClosure->isCalled());
    }

    public function testClientHandler(): void
    {
        $commandClosure = new ClosureTest();
        $editedMessageClosure = new ClosureTest();
        $channelPostClosure = new ClosureTest();
        $editedChannelPostClosure = new ClosureTest();

        $updates = [
            Update::fromResponse(json_decode($this->getDataFile('events/command.json'), true)),
            Update::fromResponse(json_decode($this->getDataFile('events/editedMessage.json'), true)),
            Update::fromResponse(json_decode($this->getDataFile('events/channelPost.json'), true)),
        ];

        $this->client
            ->command('/testcommand', $commandClosure->getClosure())
            ->editedMessage($editedMessageClosure->getClosure())
            ->channelPost($channelPostClosure->getClosure())
            ->editedChannelPost($editedChannelPostClosure->getClosure())
            ->handle($updates)
        ;

        $this->assertTrue($commandClosure->isCalled());
        $this->assertTrue($editedMessageClosure->isCalled());
        $this->assertTrue($channelPostClosure->isCalled());
        $this->assertFalse($editedChannelPostClosure->isCalled());
    }
}
