<?php

namespace TelegramBot\Api\Test\Types\Events;

use Closure;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update;

class EventTest extends TestCase
{
    public function data(): array
    {
        return [
            [
                function ($update) {
                    return $update;
                },
                function ($update) {
                    return $update;
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
    public function testConstructor(Closure $action, Closure $checker, Update $update): void
    {
        $item = new Event($action, $checker);

        $this->assertInstanceOf(Event::class, $item);
    }

    /**
     * @dataProvider data
     */
    public function testExecuteAction(Closure $action, Closure $checker, Update $update): void
    {
        $item = new Event($action, $checker);

        $result = $item->executeAction($update);

        $this->assertInstanceOf(Update::class, $result);
        $this->assertSame($update, $result);
    }

    /**
     * @dataProvider data
     */
    public function testExecuteActionFalse(Closure $action, Closure $checker, Update $update): void
    {
        $item = new Event($action, $checker);

        $reflection = new ReflectionClass($item);
        $reflectionProperty = $reflection->getProperty('action');
        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($item, 1);
        $reflectionProperty->setAccessible(false);

        $this->assertFalse($item->executeAction($update));
    }

    /**
     * @dataProvider data
     */
    public function testExecuteCheker(Closure $action, Closure $checker, Update $update): void
    {
        $item = new Event($action, $checker);

        $result = $item->executeChecker($update);

        $this->assertInstanceOf(Update::class, $result);
        $this->assertEquals($update, $result);
    }

    /**
     * @dataProvider data
     */
    public function testExecuteCheckerFalse(Closure $action, Closure $checker, Update $update): void
    {
        $item = new Event($action, $checker);

        $reflection = new ReflectionClass($item);
        $reflectionProperty = $reflection->getProperty('checker');
        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($item, 1);
        $reflectionProperty->setAccessible(false);

        $this->assertFalse($item->executeChecker($update));
    }

}
