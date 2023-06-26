<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\PropertyType;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfArrayOfPhotoSizeType;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represent a user's profile pictures.
 */
final readonly class UserProfilePhotos extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Total number of profile pictures the target user has
         */
        public int $totalCount,

        /**
         * Requested profile pictures (in up to 4 sizes each)
         *
         * @var list<list<PhotoSize>>
         */
        #[PropertyType(ArrayOfArrayOfPhotoSizeType::class)]
        public array $photos,
    ) {
    }
}
