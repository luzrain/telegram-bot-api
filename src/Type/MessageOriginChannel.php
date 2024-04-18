<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The message was originally sent to a channel chat.
 */
final readonly class MessageOriginChannel extends MessageOrigin
{
    public const TYPE = 'channel';

    public function __construct(
        /**
         * Date the message was sent originally in Unix time
         */
        public int $date,

        /**
         * Channel chat to which the message was originally sent
         */
        public Chat $chat,

        /**
         * Unique message identifier inside the chat
         */
        public int $messageId,

        /**
         * Optional. Signature of the original post author
         */
        public string|null $authorSignature = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
