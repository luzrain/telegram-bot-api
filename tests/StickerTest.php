<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\PhotoSize;
use TelegramBot\Api\Types\Sticker;

class StickerTest extends TestCase
{
    public function testGetFileId()
    {
        $sticker = new Sticker();
        $sticker->setFileId('testfileId');
        $this->assertSame('testfileId', $sticker->getFileId());
    }

    public function testGetWidth()
    {
        $sticker = new Sticker();
        $sticker->setWidth(2);
        $this->assertSame(2, $sticker->getWidth());
    }

    public function testGetHeight()
    {
        $sticker = new Sticker();
        $sticker->setHeight(4);
        $this->assertSame(4, $sticker->getHeight());
    }

    public function testGetFileSize()
    {
        $sticker = new Sticker();
        $sticker->setFileSize(6);
        $this->assertSame(6, $sticker->getFileSize());
    }

    public function testGetThumb()
    {
        $sticker = new Sticker();
        $thumb = PhotoSize::fromResponse([
            'file_id' => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'file_size' => 3
        ]);
        $sticker->setThumb($thumb);
        $this->assertEquals($thumb, $sticker->getThumb());
        $this->assertInstanceOf(PhotoSize::class, $sticker->getThumb());
    }

    public function testFromResponse()
    {
        $sticker = Sticker::fromResponse([
            'file_id' => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'file_size' => 3,
            'thumb' => [
                'file_id' => 'testFileId1',
                'width' => 1,
                'height' => 2,
                'file_size' => 3
            ]
        ]);
        $thumb = PhotoSize::fromResponse([
            'file_id' => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'file_size' => 3
        ]);
        $this->assertInstanceOf(Sticker::class, $sticker);
        $this->assertSame('testFileId1', $sticker->getFileId());
        $this->assertSame(1, $sticker->getWidth());
        $this->assertSame(2, $sticker->getHeight());
        $this->assertSame(3, $sticker->getFileSize());
        $this->assertEquals($thumb, $sticker->getThumb());
    }

    public function testSetFileSizeException()
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Sticker();
        $item->setFileSize('s');
    }

    public function testSetHeightException()
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Sticker();
        $item->setHeight('s');
    }

    public function testSetWidthException()
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Sticker();
        $item->setWidth('s');
    }
}
