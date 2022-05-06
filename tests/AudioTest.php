<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\Audio;

class AudioTest extends TestCase
{
    public function testGetFileId(): void
    {
        $item = new Audio();
        $item->setFileId('testfileId');
        $this->assertSame('testfileId', $item->getFileId());
    }

    public function testGetDuration(): void
    {
        $item = new Audio();
        $item->setDuration(1);
        $this->assertSame(1, $item->getDuration());
    }

    public function testGetPerformer(): void
    {
        $item = new Audio();
        $item->setPerformer('test');
        $this->assertSame('test', $item->getPerformer());
    }

    public function testGetTitle(): void
    {
        $item = new Audio();
        $item->setTitle('test');
        $this->assertSame('test', $item->getTitle());
    }

    public function testGetFileSize(): void
    {
        $item = new Audio();
        $item->setFileSize(6);
        $this->assertSame(6, $item->getFileSize());
    }

    public function testGetMimeType(): void
    {
        $item = new Audio();
        $item->setMimeType('audio/mp3');
        $this->assertSame('audio/mp3', $item->getMimeType());
    }

    public function testFromResponse(): void
    {
        $item = Audio::fromResponse([
            'file_id' => 'testFileId1',
            'duration' => 1,
            'performer' => 'testperformer',
            'title' => 'testtitle',
            'mime_type' => 'audio/mp3',
            'file_size' => 3,
        ]);

        $this->assertInstanceOf(Audio::class, $item);
        $this->assertSame('testFileId1', $item->getFileId());
        $this->assertSame(1, $item->getDuration());
        $this->assertSame('testperformer', $item->getPerformer());
        $this->assertSame('testtitle', $item->getTitle());
        $this->assertSame('audio/mp3', $item->getMimeType());
        $this->assertSame(3, $item->getFileSize());
    }

    public function testFromResponseException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $item = Audio::fromResponse([
            'duration' => 1,
            'mime_type' => 'audio/mp3',
            'file_size' => 3,
        ]);
    }

    public function testFromResponseException2(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $item = Audio::fromResponse([
            'file_id' => 'testFileId1',
            'mime_type' => 'audio/mp3',
            'file_size' => 3,
        ]);
    }

    public function testSetDurationException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Audio();
        $item->setDuration('s');
    }

    public function testSetFileSizeException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Audio();
        $item->setFileSize('s');
    }

}
