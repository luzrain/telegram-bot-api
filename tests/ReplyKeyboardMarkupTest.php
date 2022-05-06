<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ReplyKeyboardMarkup;

class ReplyKeyboardMarkupTest extends TestCase
{
    public function testConstructor()
    {
        $item = new ReplyKeyboardMarkup([['one', 'two']]);

        $this->assertSame([['one', 'two']], $item->getKeyboard());
        $this->assertNull($item->isOneTimeKeyboard());
        $this->assertNull($item->isResizeKeyboard());
        $this->assertNull($item->isSelective());
    }

    public function testConstructor2()
    {
        $item = new ReplyKeyboardMarkup([['one', 'two']], true);

        $this->assertSame([['one', 'two']], $item->getKeyboard());
        $this->assertTrue($item->isOneTimeKeyboard());
        $this->assertNull($item->isResizeKeyboard());
        $this->assertNull($item->isSelective());
    }

    public function testConstructor3()
    {
        $item = new ReplyKeyboardMarkup([['one', 'two']], true, true);

        $this->assertSame([['one', 'two']], $item->getKeyboard());
        $this->assertTrue($item->isOneTimeKeyboard());
        $this->assertTrue($item->isResizeKeyboard());
        $this->assertNull($item->isSelective());
    }

    public function testConstructor4()
    {
        $item = new ReplyKeyboardMarkup([['one', 'two']], true, true, true);

        $this->assertSame([['one', 'two']], $item->getKeyboard());
        $this->assertTrue(true, 'oneTimeKeyboard', $item);
        $this->assertTrue(true, 'resizeKeyboard', $item);
        $this->assertTrue(true, 'selective', $item);
    }

    public function testGetKeyboard()
    {
        $item = new ReplyKeyboardMarkup([['one', 'two']]);
        $item->setKeyboard([['one', 'two', 'three']]);

        $this->assertSame([['one', 'two', 'three']], $item->getKeyboard());
    }

    public function testIsSelective()
    {
        $item = new ReplyKeyboardMarkup([['one', 'two']]);
        $item->setSelective(true);

        $this->assertTrue($item->isSelective());
    }

    public function testIsOneTimeKeyboard()
    {
        $item = new ReplyKeyboardMarkup([['one', 'two']]);
        $item->setOneTimeKeyboard(false);

        $this->assertFalse($item->isOneTimeKeyboard());
    }

    public function testIsResizeKeyboard()
    {
        $item = new ReplyKeyboardMarkup([['one', 'two']]);
        $item->setResizeKeyboard(true);

        $this->assertTrue($item->isResizeKeyboard());
    }

    public function testToJson()
    {
        $item = new ReplyKeyboardMarkup([['one', 'two']]);

        $this->assertSame(json_encode(['keyboard' => [['one', 'two']]]), $item->toJson());
    }

    public function testToJson2()
    {
        $item = new ReplyKeyboardMarkup([['one', 'two']], true, true, true);

        $this->assertEquals(json_encode([
            'keyboard' => [['one', 'two']],
            'one_time_keyboard' => true,
            'resize_keyboard' => true,
            'selective' => true,
        ]), $item->toJson());
    }

    public function testToJson3()
    {
        $item = new ReplyKeyboardMarkup([['one', 'two']]);

        $this->assertEquals(['keyboard' => [['one', 'two']]], $item->toJson(true));
    }

    public function testToJson4()
    {
        $item = new ReplyKeyboardMarkup([['one', 'two']], true, true, true);

        $this->assertSame([
            'keyboard' => [['one', 'two']],
            'one_time_keyboard' => true,
            'resize_keyboard' => true,
            'selective' => true,
        ], $item->toJson(true));
    }

}
