<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Client;
use TelegramBot\Api\Test\Data\ClosureTest;
use TelegramBot\Api\Types\Message;

class ClientTest extends TestCase
{
    private Client $client;

    public function clientHandlersData(): iterable
    {
        yield ['command', file_get_contents(__DIR__ . '/Data/events/command.json')];
        yield ['editedMessage', file_get_contents(__DIR__ . '/Data/events/editedMessage.json')];
        yield ['channelPost', file_get_contents(__DIR__ . '/Data/events/channelPost.json')];
        yield ['editedChannelPost', file_get_contents(__DIR__ . '/Data/events/editedChannelPost.json')];
        yield ['inlineQuery', file_get_contents(__DIR__ . '/Data/events/inlineQuery.json')];
        yield ['chosenInlineResult', file_get_contents(__DIR__ . '/Data/events/chosenInlineResult.json')];
        yield ['callbackQuery', file_get_contents(__DIR__ . '/Data/events/callbackQuery.json')];
        yield ['shippingQuery', file_get_contents(__DIR__ . '/Data/events/shippingQuery.json')];
        yield ['preCheckoutQuery', file_get_contents(__DIR__ . '/Data/events/preCheckoutQuery.json')];
    }

    public function setUp(): void
    {
        $this->client = new Client();
    }

    /**
     * @dataProvider clientHandlersData
     */
    public function testClientHandlers(string $eventName, string $requestBody): void
    {
        $commandClosure = new ClosureTest();
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
        $this->assertSame($eventName === 'editedMessage', $editedMessageClosure->isCalled());
        $this->assertSame($eventName === 'channelPost', $channelPostClosure->isCalled());
        $this->assertSame($eventName === 'editedChannelPost', $editedChannelPostClosure->isCalled());
        $this->assertSame($eventName === 'inlineQuery', $inlineQueryClosure->isCalled());
        $this->assertSame($eventName === 'chosenInlineResult', $chosenInlineResultClosure->isCalled());
        $this->assertSame($eventName === 'callbackQuery', $callbackQueryClosure->isCalled());
        $this->assertSame($eventName === 'shippingQuery', $shippingQueryClosure->isCalled());
        $this->assertSame($eventName === 'preCheckoutQuery', $preCheckoutQueryClosure->isCalled());
    }
}
