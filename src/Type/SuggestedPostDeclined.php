<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a service message about the rejection of a suggested post.
 */
final readonly class SuggestedPostDeclined extends Type
{
    protected function __construct(
        /**
         * Optional. Message containing the suggested post. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
         */
        public Message|null $suggestedPostMessage = null,

        /**
         * Optional. Comment with which the post was declined
         */
        public string|null $comment = null,
    ) {
    }
}
