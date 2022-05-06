<?php

namespace TelegramBot\Api\Test\Types\Inline;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\Inline\InlineQuery;
use TelegramBot\Api\Types\User;

class InlineQueryTest extends TestCase
{
    protected $inlineQueryFixture = [
        'id' => 1,
        'from' => [
            'first_name' => 'Ilya',
            'last_name' => 'Gusev',
            'id' => 123456,
            'username' => 'iGusev',
        ],
        'query' => 'test_query',
        'offset' => '20'
    ];

    public function testFromResponse1()
    {
        $item = InlineQuery::fromResponse($this->inlineQueryFixture);

        $user = User::fromResponse($this->inlineQueryFixture['from']);

        $this->assertInstanceOf(InlineQuery::class, $item);
        $this->assertSame(1, $item->getId());
        $this->assertEquals($user, $item->getFrom());
        $this->assertSame('20', $item->getOffset());
    }


    public function testFromResponse2() {
        $this->inlineQueryFixture['offset'] = '';
        $item = InlineQuery::fromResponse($this->inlineQueryFixture);

        $user = User::fromResponse($this->inlineQueryFixture['from']);

        $this->assertInstanceOf(InlineQuery::class, $item);
        $this->assertSame(1, $item->getId());
        $this->assertEquals($user, $item->getFrom());
        $this->assertSame('', $item->getOffset());
    }

    public function testFromResponseException1() {
        unset($this->inlineQueryFixture['id']);
        $this->expectException(InvalidArgumentException::class);
        InlineQuery::fromResponse($this->inlineQueryFixture);
    }

    public function testFromResponseException2() {
        unset($this->inlineQueryFixture['from']);
        $this->expectException(InvalidArgumentException::class);
        InlineQuery::fromResponse($this->inlineQueryFixture);
    }

    public function testFromResponseException3() {
        unset($this->inlineQueryFixture['query']);
        $this->expectException(InvalidArgumentException::class);
        InlineQuery::fromResponse($this->inlineQueryFixture);
    }

    public function testFromResponseException4() {
        unset($this->inlineQueryFixture['offset']);
        $this->expectException(InvalidArgumentException::class);
        InlineQuery::fromResponse($this->inlineQueryFixture);
    }

    public function testGetId()
    {
        $item = new InlineQuery();
        $item->setId('testId');
        $this->assertSame('testId', $item->getId());
    }

    public function testGetFrom() {
        $item = new InlineQuery();
        $user = User::fromResponse($this->inlineQueryFixture['from']);
        $item->setFrom($user);
        $this->assertEquals($user, $item->getFrom());
    }

    public function testGetQuery() {
        $item = new InlineQuery();
        $item->setQuery('testQuery');
        $this->assertSame('testQuery', $item->getQuery());
    }

    public function testGetOffset() {
        $item = new InlineQuery();
        $item->setOffset('20');
        $this->assertSame('20', $item->getOffset());
    }
}
