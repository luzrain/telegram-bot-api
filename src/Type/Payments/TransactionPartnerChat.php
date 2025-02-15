<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Payments;

use Luzrain\TelegramBotApi\Type\Chat;
use Luzrain\TelegramBotApi\Type\Stickers\Gift;

/**
 * Describes a transaction with a chat.
 */
final readonly class TransactionPartnerChat extends TransactionPartner
{
    public const TYPE = 'chat';

    protected function __construct(

        /**
         * Information about the chat
         */
        public Chat $chat,

        /**
         * Optional. The gift sent to the chat by the bot
         */
        public Gift|null $gift = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
