<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ReplyKeyboardHide;

class ReplyKeyboardHideTest extends TestCase
{
    public function testConstructor(): void
    {
        $item = new ReplyKeyboardHide();

        $this->assertTrue($item->isHideKeyboard());
        $this->assertNull($item->isSelective());
    }

    public function testConstructor2(): void
    {
        $item = new ReplyKeyboardHide(true, true);

        $this->assertTrue($item->isHideKeyboard());
        $this->assertTrue($item->isSelective());
    }

    public function testConstructor3(): void
    {
        $item = new ReplyKeyboardHide(false, true);

        $this->assertFalse($item->isHideKeyboard());
        $this->assertTrue($item->isSelective());
    }

    public function testConstructor4(): void
    {
        $item = new ReplyKeyboardHide(true);

        $this->assertTrue($item->isHideKeyboard());
        $this->assertNull($item->isSelective());
    }

    public function testIsHideKeyboard(): void
    {
        $item = new ReplyKeyboardHide(true);
        $item->setHideKeyboard(false);

        $this->assertFalse($item->isHideKeyboard());
    }

    public function testIsSelective(): void
    {
        $item = new ReplyKeyboardHide();
        $item->setSelective(true);

        $this->assertTrue($item->isSelective());
    }

    public function testToJson(): void
    {
        $item = new ReplyKeyboardHide();

        $this->assertEquals(json_encode(['hide_keyboard' => true]), $item->toJson());
    }

    public function testToJson2(): void
    {
        $item = new ReplyKeyboardHide();

        $this->assertEquals(['hide_keyboard' => true], $item->toJson(true));
    }

    public function testToJson3(): void
    {
        $item = new ReplyKeyboardHide(true, true);

        $this->assertEquals(json_encode(['hide_keyboard' => true, 'selective' => true]), $item->toJson());
    }

    public function testToJson4(): void
    {
        $item = new ReplyKeyboardHide(true, true);

        $this->assertEquals(['hide_keyboard' => true, 'selective' => true], $item->toJson(true));
    }
}
