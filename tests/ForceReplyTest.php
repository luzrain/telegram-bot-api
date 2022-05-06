<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ForceReply;

class ForceReplyTest extends TestCase
{
    public function testConstructor()
    {
        $item = new ForceReply();

        $this->assertTrue($item->isForceReply());
        $this->assertNull($item->isSelective());
    }

    public function testConstructor2()
    {
        $item = new ForceReply(true, true);

        $this->assertTrue($item->isForceReply());
        $this->assertTrue($item->isSelective());
    }

    public function testConstructor3()
    {
        $item = new ForceReply(false, true);

        $this->assertFalse($item->isForceReply());
        $this->assertTrue($item->isSelective());
    }

    public function testConstructor4()
    {
        $item = new ForceReply(true);

        $this->assertTrue($item->isForceReply());
        $this->assertNull($item->isSelective());
    }

    public function testIsforceReply()
    {
        $item = new ForceReply(true);
        $item->setforceReply(false);

        $this->assertFalse($item->isforceReply());
    }

    public function testIsSelective()
    {
        $item = new ForceReply();
        $item->setSelective(true);

        $this->assertTrue($item->isSelective());
    }

    public function testToJson()
    {
        $item = new ForceReply();

        $this->assertSame(json_encode(['force_reply' => true]), $item->toJson());
    }

    public function testToJson2()
    {
        $item = new ForceReply();

        $this->assertSame(['force_reply' => true], $item->toJson(true));
    }

    public function testToJson3()
    {
        $item = new ForceReply(true, true);

        $this->assertSame(json_encode(['force_reply' => true, 'selective' => true]), $item->toJson());
    }

    public function testToJson4()
    {
        $item = new ForceReply(true, true);

        $this->assertSame(['force_reply' => true, 'selective' => true], $item->toJson(true));
    }
}
