<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\UserProfileAudios;

/**
 * Use this method to get a list of profile audios for a user. Returns a UserProfileAudios object.
 *
 * @extends Method<UserProfileAudios>
 */
final class GetUserProfileAudios extends Method
{
    protected static string $methodName = 'getUserProfileAudios';
    protected static string $responseClass = UserProfileAudios::class;

    public function __construct(
        /**
         * Unique identifier of the target user
         */
        protected int $userId,

        /**
         * Sequential number of the first audio to be returned. By default, all audios are returned.
         */
        protected int|null $offset = null,

        /**
         * Limits the number of audios to be retrieved. Values between 1-100 are accepted. Defaults to 100.
         */
        protected int|null $limit = null,
    ) {
    }
}
