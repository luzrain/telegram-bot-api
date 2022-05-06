<?php

namespace TelegramBot\Api\Test\Types\Inline;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\Inline\ChosenInlineResult;
use TelegramBot\Api\Types\User;

class ChosenInlineResultTest extends TestCase
{
    protected $chosenInlineResultFixture = [
        'result_id' => 1,
        'from' => [
            'first_name' => 'Ilya',
            'last_name' => 'Gusev',
            'id' => 123456,
            'username' => 'iGusev',
        ],
        'query' => 'test_query'
    ];

    public function testFromResponse(): void
    {
        $item = ChosenInlineResult::fromResponse($this->chosenInlineResultFixture);

        $user = User::fromResponse($this->chosenInlineResultFixture['from']);

        $this->assertInstanceOf(ChosenInlineResult::class, $item);
        $this->assertSame($this->chosenInlineResultFixture['result_id'], $item->getResultId());
        $this->assertEquals($user, $item->getFrom());
        $this->assertSame($this->chosenInlineResultFixture['query'], $item->getQuery());
    }

    public function testFromResponseException1(): void
    {
        unset($this->chosenInlineResultFixture['result_id']);
        $this->expectException(InvalidArgumentException::class);
        ChosenInlineResult::fromResponse($this->chosenInlineResultFixture);
    }

    public function testFromResponseException2(): void
    {
        unset($this->chosenInlineResultFixture['from']);
        $this->expectException(InvalidArgumentException::class);
        ChosenInlineResult::fromResponse($this->chosenInlineResultFixture);
    }

    public function testFromResponseException3(): void
    {
        unset($this->chosenInlineResultFixture['query']);
        $this->expectException(InvalidArgumentException::class);
        ChosenInlineResult::fromResponse($this->chosenInlineResultFixture);
    }

    public function testGetResultId(): void
    {
        $item = new ChosenInlineResult();
        $item->setResultId($this->chosenInlineResultFixture['result_id']);
        $this->assertSame($this->chosenInlineResultFixture['result_id'], $item->getResultId());
    }

    public function testGetFrom(): void
    {
        $item = new ChosenInlineResult();
        $user = User::fromResponse($this->chosenInlineResultFixture['from']);
        $item->setFrom($user);
        $this->assertSame($user, $item->getFrom());
    }

    public function testGetQuery(): void
    {
        $item = new ChosenInlineResult();
        $item->setQuery('testQuery');
        $this->assertSame('testQuery', $item->getQuery());
    }
}
