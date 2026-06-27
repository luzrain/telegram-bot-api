<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object describes the access settings of a bot.
 */
final readonly class BotAccessSettings extends Type
{
    protected function __construct(
        /**
         * True, if only selected users can access the bot. The bot's owner can always access it.
         */
        public bool $isAccessRestricted,

        /**
         * Optional. The list of other users who have access to the bot if the access is restricted
         *
         * @var list<User>|null
         */
        #[ArrayType(User::class)]
        public array|null $addedUsers = null,
    ) {
    }
}
