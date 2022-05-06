<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\PhotoSize;

class PhotoSizeTest extends TestCase
{
    public function testGetFileId()
    {
        $photoSize = new PhotoSize();
        $photoSize->setFileId('testfileId');
        $this->assertSame('testfileId', $photoSize->getFileId());
    }

    public function testGetWidth()
    {
        $photoSize = new PhotoSize();
        $photoSize->setWidth(2);
        $this->assertSame(2, $photoSize->getWidth());
    }

    public function testGetHeight()
    {
        $photoSize = new PhotoSize();
        $photoSize->setHeight(4);
        $this->assertSame(4, $photoSize->getHeight());
    }

    public function testGetFileSize()
    {
        $photoSize = new PhotoSize();
        $photoSize->setFileSize(6);
        $this->assertSame(6, $photoSize->getFileSize());
    }

    public function testFromResponse()
    {
        $photoSize = PhotoSize::fromResponse(array(
            'file_id' => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'file_size' => 3
        ));
        $this->assertInstanceOf(PhotoSize::class, $photoSize);
        $this->assertSame('testFileId1', $photoSize->getFileId());
        $this->assertSame(1, $photoSize->getWidth());
        $this->assertSame(2, $photoSize->getHeight());
        $this->assertSame(3, $photoSize->getFileSize());
    }

    public function testSetFileSizeException()
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new PhotoSize();
        $item->setFileSize('s');
    }

    public function testSetHeightException()
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new PhotoSize();
        $item->setHeight('s');
    }

    public function testSetWidthException()
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new PhotoSize();
        $item->setWidth('s');
    }
}
