<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a service message about the approval of a suggested post.
 */
final readonly class SuggestedPostApproved extends Type
{
    protected function __construct(
        /**
         * Date when the post will be published
         */
        public int $sendDate,

        /**
         * Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
         */
        public Message|null $suggestedPostMessage = null,

        /**
         * Optional. Amount paid for the post
         */
        public SuggestedPostPrice|null $price = null,
    ) {
    }
}
