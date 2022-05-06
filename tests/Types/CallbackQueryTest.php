<?php

namespace TelegramBot\Api\Test\Types;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\CallbackQuery;
use TelegramBot\Api\Types\User;

class CallbackQueryTest extends TestCase
{
    protected $callbackQueryFixture = [
        'id' => 1,
        'from' => [
            'first_name' => 'Ilya',
            'last_name' => 'Gusev',
            'id' => 123456,
            'username' => 'iGusev',
        ],
        'inline_message_id' => 1234,
        'chat_instance' => 123,
        'data' => 'callback_data',
        'game_short_name' => 'game_name'
    ];

    public function testFromResponse()
    {
        $item = CallbackQuery::fromResponse($this->callbackQueryFixture);

        $user = User::fromResponse($this->callbackQueryFixture['from']);

        $this->assertInstanceOf(CallbackQuery::class, $item);
        $this->assertSame($this->callbackQueryFixture['id'], $item->getId());
        $this->assertEquals($user, $item->getFrom());
        $this->assertSame($this->callbackQueryFixture['inline_message_id'], $item->getInlineMessageId());
        $this->assertSame($this->callbackQueryFixture['chat_instance'], $item->getChatInstance());
        $this->assertSame($this->callbackQueryFixture['data'], $item->getData());
        $this->assertSame($this->callbackQueryFixture['game_short_name'], $item->getGameShortName());
    }

    public function testFromResponseExceptionEmptyId() {
        unset($this->callbackQueryFixture['id']);
        $this->expectException(InvalidArgumentException::class);
        CallbackQuery::fromResponse($this->callbackQueryFixture);
    }

    public function testFromResponseExceptionEmptyFrom() {
        unset($this->callbackQueryFixture['from']);
        $this->expectException(InvalidArgumentException::class);
        CallbackQuery::fromResponse($this->callbackQueryFixture);
    }

    public function testGetId()
    {
        $item = new CallbackQuery();
        $item->setId($this->callbackQueryFixture['id']);
        $this->assertSame($this->callbackQueryFixture['id'], $item->getId());
    }

    public function testGetFrom() {
        $item = new CallbackQuery();
        $user = User::fromResponse($this->callbackQueryFixture['from']);
        $item->setFrom($user);
        $this->assertSame($user, $item->getFrom());
    }

    public function testGetInlineMessageId() {
        $item = new CallbackQuery();
        $item->setInlineMessageId('testInlineMessageId');
        $this->assertSame('testInlineMessageId', $item->getInlineMessageId());
    }

    public function testGetChatInstance() {
        $item = new CallbackQuery();
        $item->setChatInstance('testChatInstance');
        $this->assertSame('testChatInstance', $item->getChatInstance());
    }

    public function testGetData() {
        $item = new CallbackQuery();
        $item->setData('testData');
        $this->assertSame('testData', $item->getData());
    }

    public function testGetGameShortName() {
        $item = new CallbackQuery();
        $item->setGameShortName('testGameShortName');
        $this->assertSame('testGameShortName', $item->getGameShortName());
    }
}
