<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The message was originally sent on behalf of a chat to a group chat.
 */
final readonly class MessageOriginChat extends MessageOrigin
{
    public const TYPE = 'chat';

    public function __construct(
        /**
         * Date the message was sent originally in Unix time
         */
        public int $date,

        /**
         * Chat that sent the message originally
         */
        public Chat $senderChat,

        /**
         * Optional. For messages originally sent by an anonymous chat administrator, original message author signature
         */
        public string|null $authorSignature = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
