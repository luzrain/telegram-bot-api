<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Exceptions\InvalidArgumentException;
use TelegramBot\Api\Types\PhotoSize;
use TelegramBot\Api\Types\Sticker;

class StickerTest extends TestCase
{
    public function testGetFileId(): void
    {
        $sticker = new Sticker();
        $sticker->setFileId('testfileId');
        $this->assertSame('testfileId', $sticker->getFileId());
    }

    public function testGetWidth(): void
    {
        $sticker = new Sticker();
        $sticker->setWidth(2);
        $this->assertSame(2, $sticker->getWidth());
    }

    public function testGetHeight(): void
    {
        $sticker = new Sticker();
        $sticker->setHeight(4);
        $this->assertSame(4, $sticker->getHeight());
    }

    public function testGetFileSize(): void
    {
        $sticker = new Sticker();
        $sticker->setFileSize(6);
        $this->assertSame(6, $sticker->getFileSize());
    }

    public function testGetThumb(): void
    {
        $sticker = new Sticker();
        $thumb = PhotoSize::fromResponse([
            'file_id' => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'file_size' => 3,
        ]);
        $sticker->setThumb($thumb);
        $this->assertEquals($thumb, $sticker->getThumb());
        $this->assertInstanceOf(PhotoSize::class, $sticker->getThumb());
    }

    public function testFromResponse(): void
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
                'file_size' => 3,
            ],
        ]);
        $thumb = PhotoSize::fromResponse([
            'file_id' => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'file_size' => 3,
        ]);
        $this->assertInstanceOf(Sticker::class, $sticker);
        $this->assertSame('testFileId1', $sticker->getFileId());
        $this->assertSame(1, $sticker->getWidth());
        $this->assertSame(2, $sticker->getHeight());
        $this->assertSame(3, $sticker->getFileSize());
        $this->assertEquals($thumb, $sticker->getThumb());
    }

    public function testSetFileSizeException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Sticker();
        $item->setFileSize('s');
    }

    public function testSetHeightException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Sticker();
        $item->setHeight('s');
    }

    public function testSetWidthException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Sticker();
        $item->setWidth('s');
    }
}
