<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object contains information about the users whose identifiers were shared with the bot using a KeyboardButtonRequestUsers button.
 */
final readonly class UsersShared extends Type
{
    protected function __construct(
        /**
         * Identifier of the request
         */
        public int $requestId,

        /**
         * Information about users shared with the bot.
         *
         * @var list<SharedUser>
         */
        #[ArrayType(SharedUser::class)]
        public array $users,
    ) {
    }
}
