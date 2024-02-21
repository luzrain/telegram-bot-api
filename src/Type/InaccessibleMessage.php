<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * This object describes a message that was deleted or is otherwise inaccessible to the bot.
 */
final readonly class InaccessibleMessage extends MaybeInaccessibleMessage
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
        parent::__construct($this->date);
    }
}
