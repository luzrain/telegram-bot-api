<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\ForceReply;

class ForceReplyTest extends TestCase
{
    public function testConstructor(): void
    {
        $item = new ForceReply();

        $this->assertTrue($item->isForceReply());
        $this->assertNull($item->isSelective());
    }

    public function testConstructor2(): void
    {
        $item = new ForceReply(true, true);

        $this->assertTrue($item->isForceReply());
        $this->assertTrue($item->isSelective());
    }

    public function testConstructor3(): void
    {
        $item = new ForceReply(false, true);

        $this->assertFalse($item->isForceReply());
        $this->assertTrue($item->isSelective());
    }

    public function testConstructor4(): void
    {
        $item = new ForceReply(true);

        $this->assertTrue($item->isForceReply());
        $this->assertNull($item->isSelective());
    }

    public function testIsforceReply(): void
    {
        $item = new ForceReply(true);
        $item->setforceReply(false);

        $this->assertFalse($item->isforceReply());
    }

    public function testIsSelective(): void
    {
        $item = new ForceReply();
        $item->setSelective(true);

        $this->assertTrue($item->isSelective());
    }

    public function testToJson(): void
    {
        $item = new ForceReply();

        $this->assertSame(json_encode(['force_reply' => true]), $item->toJson());
    }

    public function testToJson2(): void
    {
        $item = new ForceReply();

        $this->assertSame(['force_reply' => true], $item->toJson(true));
    }

    public function testToJson3(): void
    {
        $item = new ForceReply(true, true);

        $this->assertSame(json_encode(['force_reply' => true, 'selective' => true]), $item->toJson());
    }

    public function testToJson4(): void
    {
        $item = new ForceReply(true, true);

        $this->assertSame(['force_reply' => true, 'selective' => true], $item->toJson(true));
    }
}
