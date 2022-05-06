<?php

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Exceptions\InvalidArgumentException;
use TelegramBot\Api\Types\PhotoSize;
use TelegramBot\Api\Types\UserProfilePhotos;

class UserProfilePhotosTest extends TestCase
{
    public function testGetTotalCount(): void
    {
        $userProfilePhotos = new UserProfilePhotos();
        $userProfilePhotos->setTotalCount(1);
        $this->assertSame(1, $userProfilePhotos->getTotalCount());
    }

    public function testGetPhotos(): void
    {
        $userProfilePhotos = new UserProfilePhotos();
        $photos = [];
        for ($i = 0; $i < 10; $i++) {
            $photos[] = PhotoSize::fromResponse([
                'file_id' => 'testFileId1',
                'width' => $i,
                'height' => $i * 2,
                'file_size' => $i * 3,
            ]);
        }

        $userProfilePhotos->setPhotos($photos);
        $this->assertEquals($photos, $userProfilePhotos->getPhotos());
    }

    public function testFromResponse(): void
    {
        $userProfilePhotos = UserProfilePhotos::fromResponse([
            'total_count' => 1,
            'photos' => [
                [
                    [
                        'file_id' => 'testFileId1',
                        'width' => 1,
                        'height' => 2,
                        'file_size' => 3,
                    ],
                ],
            ],
        ]);
        $photos = [
            [
                PhotoSize::fromResponse([
                    'file_id' => 'testFileId1',
                    'width' => 1,
                    'height' => 2,
                    'file_size' => 3,
                ])
            ],
        ];

        $this->assertInstanceOf(UserProfilePhotos::class, $userProfilePhotos);
        $this->assertSame(1, $userProfilePhotos->getTotalCount());
        $this->assertEquals($photos, $userProfilePhotos->getPhotos());

        foreach ($userProfilePhotos->getPhotos() as $photoArray) {
            foreach($photoArray as $photo) {
                $this->assertInstanceOf(PhotoSize::class, $photo);
            }
        }
    }

    public function testSetTotalCountException(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $item = new UserProfilePhotos();
        $item->setTotalCount('s');
    }
}
