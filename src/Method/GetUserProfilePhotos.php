<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\UserProfilePhotos;

/**
 * Use this method to get a list of profile pictures for a user.
 * Returns a UserProfilePhotos object.
 *
 * @extends Method<UserProfilePhotos>
 */
final class GetUserProfilePhotos extends Method
{
    protected static string $methodName = 'getUserProfilePhotos';
    protected static string $responseClass = UserProfilePhotos::class;

    public function __construct(
        /**
         * Unique identifier of the target user
         */
        protected int $userId,

        /**
         * Sequential number of the first photo to be returned. By default, all photos are returned.
         */
        protected int|null $offset = null,

        /**
         * Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
         */
        protected int|null $limit = null,
    ) {
    }
}
