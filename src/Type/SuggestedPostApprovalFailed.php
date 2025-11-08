<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a service message about the failed approval of a suggested post. Currently, only caused by insufficient user funds at the time of approval.
 */
final readonly class SuggestedPostApprovalFailed extends Type
{
    protected function __construct(
        /**
         * Expected price of the post
         */
        public SuggestedPostPrice $price,

        /**
         * Optional. Message containing the suggested post whose approval has failed. Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
         */
        public Message|null $suggestedPostMessage = null,
    ) {
    }
}
