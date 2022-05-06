<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ReplyKeyboardHide;

class ReplyKeyboardHideTest extends TestCase
{
    public function testConstructor()
    {
        $item = new ReplyKeyboardHide();

        $this->assertTrue($item->isHideKeyboard());
        $this->assertNull($item->isSelective());
    }

    public function testConstructor2()
    {
        $item = new ReplyKeyboardHide(true, true);

        $this->assertTrue($item->isHideKeyboard());
        $this->assertTrue($item->isSelective());
    }

    public function testConstructor3()
    {
        $item = new ReplyKeyboardHide(false, true);

        $this->assertFalse($item->isHideKeyboard());
        $this->assertTrue($item->isSelective());
    }

    public function testConstructor4()
    {
        $item = new ReplyKeyboardHide(true);

        $this->assertTrue($item->isHideKeyboard());
        $this->assertNull($item->isSelective());
    }

    public function testIsHideKeyboard()
    {
        $item = new ReplyKeyboardHide(true);
        $item->setHideKeyboard(false);

        $this->assertFalse($item->isHideKeyboard());
    }

    public function testIsSelective()
    {
        $item = new ReplyKeyboardHide();
        $item->setSelective(true);

        $this->assertTrue($item->isSelective());
    }

    public function testToJson()
    {
        $item = new ReplyKeyboardHide();

        $this->assertEquals(json_encode(['hide_keyboard' => true]), $item->toJson());
    }

    public function testToJson2()
    {
        $item = new ReplyKeyboardHide();

        $this->assertEquals(['hide_keyboard' => true], $item->toJson(true));
    }

    public function testToJson3()
    {
        $item = new ReplyKeyboardHide(true, true);

        $this->assertEquals(json_encode(['hide_keyboard' => true, 'selective' => true]), $item->toJson());
    }

    public function testToJson4()
    {
        $item = new ReplyKeyboardHide(true, true);

        $this->assertEquals(['hide_keyboard' => true, 'selective' => true], $item->toJson(true));
    }
}
