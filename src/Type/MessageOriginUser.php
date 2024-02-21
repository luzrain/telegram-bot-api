<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The message was originally sent by a known user.
 */
final readonly class MessageOriginUser extends MessageOrigin
{
    public const TYPE = 'user';

    public function __construct(
        /**
         * Date the message was sent originally in Unix time
         */
        public int $date,

        /**
         * User that sent the message originally
         */
        public User $senderUser,
    ) {
        parent::__construct(self::TYPE);
    }
}
