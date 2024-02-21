<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object describes a message that was deleted or is otherwise inaccessible to the bot.
 */
final readonly class InaccessibleMessage extends Type implements MaybeInaccessibleMessage, TypeDenormalizable
{
    public function __construct(
        /**
         * Unique message identifier inside the chat
         */
        public int $messageId,

        /**
         * Always 0. The field can be used to differentiate regular and inaccessible messages.
         */
        public int $date,

        /**
         * Chat the message belonged to
         */
        public Chat $chat,
    ) {
    }
}
