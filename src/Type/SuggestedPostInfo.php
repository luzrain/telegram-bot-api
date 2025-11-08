<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Contains information about a suggested post.
 */
final readonly class SuggestedPostInfo extends Type
{
    protected function __construct(
        /**
         * State of the suggested post. Currently, it can be one of "pending", "approved", "declined".
         */
        public string $state,

        /**
         * Optional. Proposed price of the post. If the field is omitted, then the post is unpaid.
         */
        public SuggestedPostPrice|null $price = null,

        /**
         * Optional. Proposed send date of the post. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user or administrator who approves it.
         */
        public int|null $sendDate = null,
    ) {
    }
}
