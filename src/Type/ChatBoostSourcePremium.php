<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * The boost was obtained by subscribing to Telegram Premium or by gifting a Telegram Premium subscription to another user.
 */
final readonly class ChatBoostSourcePremium extends ChatBoostSource
{
    public const SOURCE = 'premium';

    public function __construct(
        /**
         * User that boosted the chat
         */
        public User $user,
    ) {
        parent::__construct(self::SOURCE);
    }
}
