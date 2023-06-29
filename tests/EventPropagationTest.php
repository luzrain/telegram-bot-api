<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Test;

use Luzrain\TelegramBotApi\ClientApi;
use Luzrain\TelegramBotApi\Event;
use Luzrain\TelegramBotApi\EventCallbackReturn;
use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Test\Helper\ClosureTestHelper;
use Luzrain\TelegramBotApi\Type\Update;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class EventPropagationTest extends TestCase
{
    private ClientApi $client;

    public function setUp(): void
    {
        $this->client = new ClientApi();
    }

    public static function callbacksData(): iterable
    {
        yield [
            new ClosureTestHelper(null),
            new ClosureTestHelper(null),
            new ClosureTestHelper(EventCallbackReturn::CONTINUE),
            new ClosureTestHelper(EventCallbackReturn::CONTINUE),
            true,
            true,
            true,
            true,
            'null',
        ];
        yield [
            new ClosureTestHelper(EventCallbackReturn::STOP),
            new ClosureTestHelper(EventCallbackReturn::STOP),
            new ClosureTestHelper(EventCallbackReturn::STOP),
            new ClosureTestHelper(EventCallbackReturn::CONTINUE),
            true,
            false,
            false,
            false,
            'null',
        ];
        yield [
            new ClosureTestHelper(EventCallbackReturn::CONTINUE),
            new ClosureTestHelper(EventCallbackReturn::STOP),
            new ClosureTestHelper(EventCallbackReturn::CONTINUE),
            new ClosureTestHelper(EventCallbackReturn::CONTINUE),
            true,
            true,
            false,
            false,
            'null',
        ];
        yield [
            new ClosureTestHelper(EventCallbackReturn::CONTINUE),
            new ClosureTestHelper(EventCallbackReturn::CONTINUE),
            new ClosureTestHelper(new Method\SendMessage(chatId: 123456789, text: 'test')),
            new ClosureTestHelper(EventCallbackReturn::CONTINUE),
            true,
            true,
            true,
            false,
            '{"method":"sendMessage","chat_id":123456789,"text":"test"}',
        ];
    }

    #[DataProvider('callbacksData')]
    public function testCallbacksPropagationAndReturnType(
        ClosureTestHelper $closure1,
        ClosureTestHelper $closure2,
        ClosureTestHelper $closure3,
        ClosureTestHelper $closure4,
        bool $isClosure1ShouldBeCalled,
        bool $isClosure2ShouldBeCalled,
        bool $isClosure3ShouldBeCalled,
        bool $isClosure4ShouldBeCalled,
        string $expectedCallbackResponse,
    ): void {
        $callbackResponse = $this->client
            ->on(new Event\Message($closure1->getClosure()))
            ->on(new Event\Message($closure2->getClosure()))
            ->on(new Event\Message($closure3->getClosure()))
            ->on(new Event\Message($closure4->getClosure()))
            ->handle(Update::fromArray(json_decode(file_get_contents(__DIR__ . '/data/events/message.json'), true)))
        ;

        $this->assertSame($isClosure1ShouldBeCalled, $closure1->isCalled());
        $this->assertSame($isClosure2ShouldBeCalled, $closure2->isCalled());
        $this->assertSame($isClosure3ShouldBeCalled, $closure3->isCalled());
        $this->assertSame($isClosure4ShouldBeCalled, $closure4->isCalled());
        $this->assertSame($expectedCallbackResponse, json_encode($callbackResponse));
    }
}
