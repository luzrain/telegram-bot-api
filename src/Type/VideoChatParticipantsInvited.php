<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a service message about new members invited to a video chat.
 */
final readonly class VideoChatParticipantsInvited extends Type
{
    protected function __construct(
        /**
         * New members that were invited to the video chat
         *
         * @var list<User>
         */
        #[ArrayType(User::class)]
        protected array $users,
    ) {
    }
}
