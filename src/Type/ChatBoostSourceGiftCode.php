<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The boost was obtained by the creation of Telegram Premium gift codes to boost a chat.
 * Each such code boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription.
 */
final readonly class ChatBoostSourceGiftCode extends ChatBoostSource
{
    public const SOURCE = 'gift_code';

    public function __construct(
        /**
         * User for which the gift code was created
         */
        public User $user,
    ) {
        parent::__construct(self::SOURCE);
    }
}
