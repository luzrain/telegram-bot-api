<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Converts a given regular gift to Telegram Stars. Requires the can_convert_gifts_to_stars business bot right.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class ConvertGiftToStars extends Method
{
    protected static string $methodName = 'convertGiftToStars';

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * Unique identifier of the regular gift that should be converted to Telegram Stars
         */
        protected string $ownedGiftId,
    ) {
    }
}
