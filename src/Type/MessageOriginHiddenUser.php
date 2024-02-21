<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The message was originally sent by an unknown user.
 */
final readonly class MessageOriginHiddenUser extends MessageOrigin
{
    public const TYPE = 'hidden_user';

    public function __construct(
        /**
         * Date the message was sent originally in Unix time
         */
        public int $date,

        /**
         * Name of the user that sent the message originally
         */
        public string $senderUserName,
    ) {
        parent::__construct(self::TYPE);
    }
}
