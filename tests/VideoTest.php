<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\PhotoSize;
use TelegramBot\Api\Types\Video;

class VideoTest extends TestCase
{
    public function testGetFileId()
    {
        $item = new Video();
        $item->setFileId('testfileId');
        $this->assertSame('testfileId', $item->getFileId());
    }

    public function testGetDuration()
    {
        $item = new Video();
        $item->setDuration(1);
        $this->assertSame(1, $item->getDuration());
    }

    public function testGetFileSize()
    {
        $item = new Video();
        $item->setFileSize(6);
        $this->assertSame(6, $item->getFileSize());
    }

    public function testGetMimeType()
    {
        $item = new Video();
        $item->setMimeType('video/mp4');
        $this->assertSame('video/mp4', $item->getMimeType());
    }

    public function testGetThumb()
    {
        $item = new Video();
        $thumb = PhotoSize::fromResponse([
            'file_id' => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'file_size' => 3
        ]);
        $item->setThumb($thumb);
        $this->assertSame($thumb, $item->getThumb());
        $this->assertInstanceOf(PhotoSize::class, $item->getThumb());
    }

    public function testGetWidth()
    {
        $item = new Video();
        $item->setWidth(2);
        $this->assertSame(2, $item->getWidth());
    }

    public function testGetHeight()
    {
        $item = new Video();
        $item->setHeight(4);
        $this->assertSame(4, $item->getHeight());
    }

    public function testFromResponse()
    {
        $item = Video::fromResponse([
            'file_id' => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'duration' => 3,
            'mime_type' => 'video/mp4',
            'file_size' => 4,
            'thumb' => [
                'file_id' => 'testFileId1',
                'width' => 5,
                'height' => 6,
                'file_size' => 7
            ]
        ]);
        $thumb = PhotoSize::fromResponse([
            'file_id' => 'testFileId1',
            'width' => 5,
            'height' => 6,
            'file_size' => 7
        ]);

        $this->assertInstanceOf(Video::class, $item);
        $this->assertSame('testFileId1', $item->getFileId());
        $this->assertSame(1, $item->getWidth());
        $this->assertSame(2, $item->getHeight());
        $this->assertSame(3, $item->getDuration());
        $this->assertSame('video/mp4', $item->getMimeType());
        $this->assertSame(4, $item->getFileSize());
        $this->assertEquals($thumb, $item->getThumb());
        $this->assertInstanceOf(PhotoSize::class, $item->getThumb());
    }

    public function testSetHeightException()
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Video();
        $item->setHeight('s');
    }

    public function testSetWidthException()
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Video();
        $item->setWidth('s');
    }

    public function testSetDurationException()
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Video();
        $item->setDuration('s');
    }

    public function testSetFileSizeException()
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Video();
        $item->setFileSize('s');
    }

    public function testFromResponseException1()
    {
        $this->expectException(InvalidArgumentException::class);

        Video::fromResponse([
            'width' => 1,
            'height' => 2,
            'duration' => 3,
            'mime_type' => 'video/mp4',
            'file_size' => 4,
            'thumb' => [
                'file_id' => 'testFileId1',
                'width' => 5,
                'height' => 6,
                'file_size' => 7
            ]
        ]);
    }

    public function testFromResponseException2()
    {
        $this->expectException(InvalidArgumentException::class);

        Video::fromResponse([
            'file_id' => 'testFileId1',
            'height' => 2,
            'duration' => 3,
            'mime_type' => 'video/mp4',
            'file_size' => 4,
            'thumb' => [
                'file_id' => 'testFileId1',
                'width' => 5,
                'height' => 6,
                'file_size' => 7
            ]
        ]);
    }

    public function testFromResponseException3()
    {
        $this->expectException(InvalidArgumentException::class);

        Video::fromResponse([
            'file_id' => 'testFileId1',
            'width' => 1,
            'duration' => 3,
            'mime_type' => 'video/mp4',
            'file_size' => 4,
            'thumb' => [
                'file_id' => 'testFileId1',
                'width' => 5,
                'height' => 6,
                'file_size' => 7
            ]
        ]);
    }

    public function testFromResponseException4()
    {
        $this->expectException(InvalidArgumentException::class);

        Video::fromResponse([
            'file_id' => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'mime_type' => 'video/mp4',
            'file_size' => 4,
            'thumb' => [
                'file_id' => 'testFileId1',
                'width' => 5,
                'height' => 6,
                'file_size' => 7
            ]
        ]);
    }
}
