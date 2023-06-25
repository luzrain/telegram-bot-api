<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\PropertyType;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfArrayOfPhotoSize;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represent a user's profile pictures.
 */
final class UserProfilePhotos extends BaseType implements TypeInterface
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
        #[PropertyType(ArrayOfArrayOfPhotoSize::class)]
        public array $photos,
    ) {
    }
}
