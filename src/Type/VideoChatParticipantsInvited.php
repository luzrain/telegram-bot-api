<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\PropertyType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfUserType;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a service message about new members invited to a video chat.
 */
final readonly class VideoChatParticipantsInvited extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * New members that were invited to the video chat
         *
         * @var list<User>
         */
        #[PropertyType(ArrayOfUserType::class)]
        protected array $users,
    ) {
    }
}
