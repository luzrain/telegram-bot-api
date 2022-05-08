<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
use TelegramBot\Api\Types\Arrays\ArrayOfArrayOfPhotoSize;

/**
 * This object represent a user's profile pictures.
 */
class UserProfilePhotos extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'total_count',
        'photos',
    ];

    protected static array $map = [
        'total_count' => true,
        'photos' => ArrayOfArrayOfPhotoSize::class,
    ];

    /**
     * Total number of profile pictures the target user has
     */
    protected int $totalCount;

    /**
     * Requested profile pictures (in up to 4 sizes each)
     */
    protected array $photos;

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getPhotos(): array
    {
        return $this->photos;
    }
}
