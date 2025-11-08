<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Contains parameters of a post that is being suggested by the bot.
 */
final readonly class SuggestedPostParameters extends Type
{
    protected function __construct(
        /**
         * Optional. Proposed price for the post. If the field is omitted, then the post is unpaid.
         */
        public SuggestedPostPrice|null $price = null,

        /**
         * Optional. Proposed send date of the post. If specified, then the date must be between 300 second and 2678400 seconds (30 days) in the future.
         * If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user who approves it.
         */
        public int|null $sendDate = null,
    ) {
    }
}
