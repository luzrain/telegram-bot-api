<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Exceptions\InvalidArgumentException;
use TelegramBot\Api\Types\Document;
use TelegramBot\Api\Types\PhotoSize;

class DocumentTest extends TestCase
{
    public function testGetFileId(): void
    {
        $item = new Document();
        $item->setFileId('testfileId');
        $this->assertSame('testfileId', $item->getFileId());
    }

    public function testGetThumb(): void
    {
        $item = new Document();
        $thumb = PhotoSize::fromResponse([
            'file_id' => 'testFileId1',
            'width' => 1,
            'height' => 2,
            'file_size' => 3,
        ]);
        $item->setThumb($thumb);
        $this->assertSame($thumb, $item->getThumb());
        $this->assertInstanceOf(PhotoSize::class, $item->getThumb());
    }

    public function testGetFileName(): void
    {
        $item = new Document();
        $item->setFileName('testfileName');
        $this->assertSame('testfileName', $item->getFileName());
    }

    public function testGetFileSize(): void
    {
        $item = new Document();
        $item->setFileSize(6);
        $this->assertSame(6, $item->getFileSize());
    }

    public function testGetMimeType(): void
    {
        $item = new Document();
        $item->setMimeType('audio/mp3');
        $this->assertSame('audio/mp3', $item->getMimeType());
    }

    public function testSetFileSizeException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new Document();
        $item->setFileSize('s');
    }

    public function testFromResponse(): void
    {
        $item = Document::fromResponse([
            'file_id' => 'testFileId1',
            'file_name' => 'testFileName',
            'mime_type' => 'audio/mp3',
            'file_size' => 3,
            'thumb' => [
                'file_id' => 'testFileId1',
                'width' => 5,
                'height' => 6,
                'file_size' => 7,
            ],
        ]);
        $thumb = PhotoSize::fromResponse([
            'file_id' => 'testFileId1',
            'width' => 5,
            'height' => 6,
            'file_size' => 7,
        ]);

        $this->assertInstanceOf(Document::class, $item);
        $this->assertSame('testFileId1', $item->getFileId());
        $this->assertSame('testFileName', $item->getFileName());
        $this->assertSame('audio/mp3', $item->getMimeType());
        $this->assertSame(3, $item->getFileSize());
        $this->assertEquals($thumb, $item->getThumb());
        $this->assertInstanceOf(PhotoSize::class, $item->getThumb());
    }

    public function testFromResponseException1(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Document::fromResponse([
            'file_name' => 'testFileName',
            'mime_type' => 'audio/mp3',
            'file_size' => 3,
            'thumb' => [
                'file_id' => 'testFileId1',
                'width' => 5,
                'height' => 6,
                'file_size' => 7,
            ],
        ]);
    }
}
