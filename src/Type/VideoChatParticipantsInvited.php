<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\PropertyType;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfUser;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a service message about new members invited to a video chat.
 */
final readonly class VideoChatParticipantsInvited extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * New members that were invited to the video chat
         *
         * @var list<User>
         */
        #[PropertyType(ArrayOfUser::class)]
        protected array $users,
    ) {
    }
}
