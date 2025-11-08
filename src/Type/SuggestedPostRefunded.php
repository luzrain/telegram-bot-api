<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a service message about a payment refund for a suggested post.
 */
final readonly class SuggestedPostRefunded extends Type
{
    protected function __construct(
        /**
         * Reason for the refund. Currently, one of "post_deleted" if the post was deleted within 24 hours of being posted or removed from scheduled messages without being posted,
         * or "payment_refunded" if the payer refunded their payment.
         */
        public string $reason,

        /**
         * Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
         */
        public Message|null $suggestedPostMessage = null,
    ) {
    }
}
