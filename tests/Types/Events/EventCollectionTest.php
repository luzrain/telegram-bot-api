<?php

namespace TelegramBot\Api\Test\Types\Events;

use Closure;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionProperty;
use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Events\EventCollection;
use TelegramBot\Api\Types\Update;

class EventCollectionTest extends TestCase
{
    public function data(): array
    {
        return [
            [
                function ($update) {
                    return false;
                },
                function ($update) {
                    return true;
                },
                Update::fromResponse([
                    'update_id' => 123456,
                    'message' => [
                        'message_id' => 13948,
                        'from' => [
                            'id' => 123,
                            'first_name' => 'Ilya',
                            'last_name' => 'Gusev',
                            'username' => 'iGusev',
                        ],
                        'chat' => [
                            'id' => 123,
                            'type' => 'private',
                            'first_name' => 'Ilya',
                            'last_name' => 'Gusev',
                            'username' => 'iGusev',
                        ],
                        'date' => 1440169809,
                        'text' => 'testText',
                    ],
                ]),
            ],
        ];
    }

    /**
     * @dataProvider data
     */
    public function testAdd1(Closure $action, Closure $checker): void
    {
        $item = new EventCollection();
        $item->add($action, $checker);

        $reflection = new ReflectionClass($item);
        $reflectionProperty = $reflection->getProperty('events');
        $reflectionProperty->setAccessible(true);
        $innerItem = $reflectionProperty->getValue($item);
        $reflectionProperty->setAccessible(false);

        $this->assertIsArray($innerItem);
        /* @var \TelegramBot\Api\Events\Event $event */
        foreach($innerItem as $event) {
            $this->assertInstanceOf(Event::class, $event);
        }
    }

    /**
     * @dataProvider data
     */
    public function testAdd2(Closure $action): void
    {
        $item = new EventCollection();
        $item->add($action);

        $reflection = new ReflectionClass($item);
        $reflectionProperty = $reflection->getProperty('events');
        $reflectionProperty->setAccessible(true);
        $innerItem = $reflectionProperty->getValue($item);
        $reflectionProperty->setAccessible(false);

        $this->assertIsArray($innerItem);
        /* @var \TelegramBot\Api\Events\Event $event */
        foreach($innerItem as $event) {
            $this->assertInstanceOf(Event::class, $event);
        }
    }

    /**
     * @dataProvider data
     */
    public function testHandle2(Closure $action, Closure $checker, Update $update): void
    {
        $item = new EventCollection();
        $name = 'test';
        $item->add($action, function ($update) use ($name) {
            return true;
        });

        $mockedEvent = $this->getMockBuilder(Event::class)
            ->disableOriginalConstructor()
            ->getMock();

        // Configure the stub.
        $mockedEvent->expects($this->once())->method('executeChecker')->willReturn(true);
        $mockedEvent->expects($this->once())->method('executeAction')->willReturn(true);

        $reflection = new ReflectionClass($item);
        $reflectionProperty = $reflection->getProperty('events');
        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($item, [$mockedEvent]);
        $reflectionProperty->setAccessible(false);

        $item->handle($update);
    }
}
