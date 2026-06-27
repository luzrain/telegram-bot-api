<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object represents the audios displayed on a user's profile.
 */
final readonly class UserProfileAudios extends Type
{
    protected function __construct(
        /**
         * Total number of profile audios for the target user
         */
        public int $totalCount,

        /**
         * Requested profile audios
         *
         * @var list<Audio>
         */
        #[ArrayType(Audio::class)]
        public array $audios,
    ) {
    }
}
