<?php

declare(strict_types=1);

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Client;
use TelegramBot\Api\Test\Helper\ClosureTestHelper;
use TelegramBot\Api\Types\Update;

final class ClientTest extends TestCase
{
    private Client $client;

    public function setUp(): void
    {
        $this->client = new Client();
    }

    public static function clientWebhookData(): iterable
    {
        yield ['command', self::getDataFile('events/command.json')];
        yield ['message', self::getDataFile('events/message.json')];
        yield ['editedMessage', self::getDataFile('events/editedMessage.json')];
        yield ['channelPost', self::getDataFile('events/channelPost.json')];
        yield ['editedChannelPost', self::getDataFile('events/editedChannelPost.json')];
        yield ['inlineQuery', self::getDataFile('events/inlineQuery.json')];
        yield ['chosenInlineResult', self::getDataFile('events/chosenInlineResult.json')];
        yield ['callbackQuery', self::getDataFile('events/callbackQuery.json')];
        yield ['shippingQuery', self::getDataFile('events/shippingQuery.json')];
        yield ['preCheckoutQuery', self::getDataFile('events/preCheckoutQuery.json')];
        yield ['poll', self::getDataFile('events/poll.json')];
        yield ['pollAnswer', self::getDataFile('events/pollAnswer.json')];
        yield ['myChatMember', self::getDataFile('events/myChatMember.json')];
    }

    private static function getDataFile(string $file): string
    {
        return file_get_contents(__DIR__ . '/data/' . $file);
    }

    /**
     * @dataProvider clientWebhookData
     */
    public function testClientWebhook(string $eventName, string $requestBody): void
    {
        $updateClosure = new ClosureTestHelper();
        $commandClosure = new ClosureTestHelper();
        $wrongCommandClosure = new ClosureTestHelper();
        $messageClosure = new ClosureTestHelper();
        $editedMessageClosure = new ClosureTestHelper();
        $channelPostClosure = new ClosureTestHelper();
        $editedChannelPostClosure = new ClosureTestHelper();
        $inlineQueryClosure = new ClosureTestHelper();
        $chosenInlineResultClosure = new ClosureTestHelper();
        $callbackQueryClosure = new ClosureTestHelper();
        $shippingQueryClosure = new ClosureTestHelper();
        $preCheckoutQueryClosure = new ClosureTestHelper();
        $pollClosure = new ClosureTestHelper();
        $pollAnswerClosure = new ClosureTestHelper();
        $myChatMember = new ClosureTestHelper();

        $this->client
            ->onUpdate($updateClosure->getClosure())
            ->onCommand('/testcommand', $commandClosure->getClosure())
            ->onCommand('/wrongcommand', $wrongCommandClosure->getClosure())
            ->onMessage($messageClosure->getClosure())
            ->onEditedMessage($editedMessageClosure->getClosure())
            ->onChannelPost($channelPostClosure->getClosure())
            ->onEditedChannelPost($editedChannelPostClosure->getClosure())
            ->onInlineQuery($inlineQueryClosure->getClosure())
            ->onChosenInlineResult($chosenInlineResultClosure->getClosure())
            ->onCallbackQuery($callbackQueryClosure->getClosure())
            ->onShippingQuery($shippingQueryClosure->getClosure())
            ->onPreCheckoutQuery($preCheckoutQueryClosure->getClosure())
            ->onPoll($pollClosure->getClosure())
            ->onPollAnswer($pollAnswerClosure->getClosure())
            ->onMyChatMember($myChatMember->getClosure())
            ->webhookHandle($requestBody)
        ;

        $this->assertTrue($updateClosure->isCalled());
        $this->assertSame($eventName === 'command', $commandClosure->isCalled());
        $this->assertFalse($wrongCommandClosure->isCalled());
        $this->assertSame(in_array($eventName, ['command', 'message']), $messageClosure->isCalled());
        $this->assertSame($eventName === 'editedMessage', $editedMessageClosure->isCalled());
        $this->assertSame($eventName === 'channelPost', $channelPostClosure->isCalled());
        $this->assertSame($eventName === 'editedChannelPost', $editedChannelPostClosure->isCalled());
        $this->assertSame($eventName === 'inlineQuery', $inlineQueryClosure->isCalled());
        $this->assertSame($eventName === 'chosenInlineResult', $chosenInlineResultClosure->isCalled());
        $this->assertSame($eventName === 'callbackQuery', $callbackQueryClosure->isCalled());
        $this->assertSame($eventName === 'shippingQuery', $shippingQueryClosure->isCalled());
        $this->assertSame($eventName === 'preCheckoutQuery', $preCheckoutQueryClosure->isCalled());
        $this->assertSame($eventName === 'poll', $pollClosure->isCalled());
        $this->assertSame($eventName === 'pollAnswer', $pollAnswerClosure->isCalled());
        $this->assertSame($eventName === 'myChatMember', $myChatMember->isCalled());
    }

    public function testClientHandler(): void
    {
        $commandClosure = new ClosureTestHelper();
        $editedMessageClosure = new ClosureTestHelper();
        $channelPostClosure = new ClosureTestHelper();
        $editedChannelPostClosure = new ClosureTestHelper();

        $updates = [
            Update::fromResponse(json_decode(self::getDataFile('events/command.json'), true)),
            Update::fromResponse(json_decode(self::getDataFile('events/editedMessage.json'), true)),
            Update::fromResponse(json_decode(self::getDataFile('events/channelPost.json'), true)),
        ];

        $this->client
            ->onCommand('/testcommand', $commandClosure->getClosure())
            ->onEditedMessage($editedMessageClosure->getClosure())
            ->onChannelPost($channelPostClosure->getClosure())
            ->onEditedChannelPost($editedChannelPostClosure->getClosure())
            ->updatesHandle($updates)
        ;

        $this->assertTrue($commandClosure->isCalled());
        $this->assertTrue($editedMessageClosure->isCalled());
        $this->assertTrue($channelPostClosure->isCalled());
        $this->assertFalse($editedChannelPostClosure->isCalled());
    }
}
