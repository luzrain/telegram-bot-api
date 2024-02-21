<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Test;

use Luzrain\TelegramBotApi\ClientApi;
use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\Exception\TelegramCallbackException;
use Luzrain\TelegramBotApi\Test\Helper\ClosureTestHelper;
use Luzrain\TelegramBotApi\Type\Update;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class ClientApiTest extends TestCase
{
    private ClientApi $client;

    public function setUp(): void
    {
        $this->client = new ClientApi();
    }

    public static function clientWebhookData(): iterable
    {
        yield ['command', \file_get_contents(__DIR__ . '/data/events/command.json')];
        yield ['message', \file_get_contents(__DIR__ . '/data/events/message.json')];
        yield ['editedMessage', \file_get_contents(__DIR__ . '/data/events/editedMessage.json')];
        yield ['channelPost', \file_get_contents(__DIR__ . '/data/events/channelPost.json')];
        yield ['editedChannelPost', \file_get_contents(__DIR__ . '/data/events/editedChannelPost.json')];
        yield ['inlineQuery', \file_get_contents(__DIR__ . '/data/events/inlineQuery.json')];
        yield ['chosenInlineResult', \file_get_contents(__DIR__ . '/data/events/chosenInlineResult.json')];
        yield ['callbackQuery', \file_get_contents(__DIR__ . '/data/events/callbackQuery.json')];
        yield ['shippingQuery', \file_get_contents(__DIR__ . '/data/events/shippingQuery.json')];
        yield ['preCheckoutQuery', \file_get_contents(__DIR__ . '/data/events/preCheckoutQuery.json')];
        yield ['poll', \file_get_contents(__DIR__ . '/data/events/poll.json')];
        yield ['pollAnswer', \file_get_contents(__DIR__ . '/data/events/pollAnswer.json')];
        yield ['botMemberBanned', \file_get_contents(__DIR__ . '/data/events/botMemberBanned.json')];
    }

    #[DataProvider('clientWebhookData')]
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
        $botMemberBanned = new ClosureTestHelper();

        $this->client
            ->on(new Event\Update($updateClosure->getClosure()))
            ->on(new Event\Command('/testcommand', $commandClosure->getClosure()))
            ->on(new Event\Command('/wrongcommand', $wrongCommandClosure->getClosure()))
            ->on(new Event\Message($messageClosure->getClosure()))
            ->on(new Event\EditedMessage($editedMessageClosure->getClosure()))
            ->on(new Event\ChannelPost($channelPostClosure->getClosure()))
            ->on(new Event\EditedChannelPost($editedChannelPostClosure->getClosure()))
            ->on(new Event\InlineQuery($inlineQueryClosure->getClosure()))
            ->on(new Event\ChosenInlineResult($chosenInlineResultClosure->getClosure()))
            ->on(new Event\CallbackQuery($callbackQueryClosure->getClosure()))
            ->on(new Event\ShippingQuery($shippingQueryClosure->getClosure()))
            ->on(new Event\PreCheckoutQuery($preCheckoutQueryClosure->getClosure()))
            ->on(new Event\Poll($pollClosure->getClosure()))
            ->on(new Event\PollAnswer($pollAnswerClosure->getClosure()))
            ->on(new Event\BotMemberBanned($botMemberBanned->getClosure()))
            ->handle(Update::fromJson($requestBody))
        ;

        $this->assertSame(true, $updateClosure->isCalled(), 'Event\Update');
        $this->assertSame($eventName === 'command', $commandClosure->isCalled(), 'Event\Command (/testcommand)');
        $this->assertSame(false, $wrongCommandClosure->isCalled(), 'Event\Command (/wrongcommand)');
        $this->assertSame(\in_array($eventName, ['command', 'message'], true), $messageClosure->isCalled(), 'Event\Message');
        $this->assertSame($eventName === 'editedMessage', $editedMessageClosure->isCalled(), 'Event\EditedMessage');
        $this->assertSame($eventName === 'channelPost', $channelPostClosure->isCalled(), 'Event\ChannelPost');
        $this->assertSame($eventName === 'editedChannelPost', $editedChannelPostClosure->isCalled(), 'Event\EditedChannelPost');
        $this->assertSame($eventName === 'inlineQuery', $inlineQueryClosure->isCalled(), 'Event\InlineQuery');
        $this->assertSame($eventName === 'chosenInlineResult', $chosenInlineResultClosure->isCalled(), 'Event\ChosenInlineResult');
        $this->assertSame($eventName === 'callbackQuery', $callbackQueryClosure->isCalled(), 'Event\CallbackQuery');
        $this->assertSame($eventName === 'shippingQuery', $shippingQueryClosure->isCalled(), 'Event\ShippingQuery');
        $this->assertSame($eventName === 'preCheckoutQuery', $preCheckoutQueryClosure->isCalled(), 'Event\PreCheckoutQuery');
        $this->assertSame($eventName === 'poll', $pollClosure->isCalled(), 'Event\Poll');
        $this->assertSame($eventName === 'pollAnswer', $pollAnswerClosure->isCalled(), 'Event\PollAnswer');
        $this->assertSame($eventName === 'botMemberBanned', $botMemberBanned->isCalled(), 'Event\BotMemberBanned');
    }

    public function testClientHandler(): void
    {
        $commandClosure = new ClosureTestHelper();
        $editedMessageClosure = new ClosureTestHelper();
        $channelPostClosure = new ClosureTestHelper();
        $editedChannelPostClosure = new ClosureTestHelper();

        $updates = [
            Update::fromJson(\file_get_contents(__DIR__ . '/data/events/command.json')),
            Update::fromJson(\file_get_contents(__DIR__ . '/data/events/editedMessage.json')),
            Update::fromJson(\file_get_contents(__DIR__ . '/data/events/channelPost.json')),
        ];

        $this->client
            ->on(new Event\Command('/testcommand', $commandClosure->getClosure()))
            ->on(new Event\EditedMessage($editedMessageClosure->getClosure()))
            ->on(new Event\ChannelPost($channelPostClosure->getClosure()))
            ->on(new Event\EditedChannelPost($editedChannelPostClosure->getClosure()))
        ;

        foreach ($updates as $update) {
            $this->client->handle($update);
        }

        $this->assertTrue($commandClosure->isCalled(), 'Event\Command (/testcommand)');
        $this->assertTrue($editedMessageClosure->isCalled(), 'Event\EditedMessage');
        $this->assertTrue($channelPostClosure->isCalled(), 'Event\ChannelPost');
        $this->assertFalse($editedChannelPostClosure->isCalled(), 'Event\EditedChannelPost');
    }

    public function testCallbacksReturnWrongType(): void
    {
        $this->expectException(TelegramCallbackException::class);

        $closure1 = new ClosureTestHelper(new \stdClass());

        $this->client
            ->on(new Event\Message($closure1->getClosure()))
            ->handle(Update::fromJson(\file_get_contents(__DIR__ . '/data/events/message.json')))
        ;
    }
}
