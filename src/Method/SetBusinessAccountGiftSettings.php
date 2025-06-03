<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\AcceptedGiftTypes;

/**
 * Changes the privacy settings pertaining to incoming gifts in a managed business account. Requires the can_change_gift_settings business bot right.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SetBusinessAccountGiftSettings extends Method
{
    protected static string $methodName = 'setBusinessAccountGiftSettings';

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * Pass True, if a button for sending a gift to the user or by the business account must always be shown in the input field
         */
        protected bool $showGiftButton,

        /**
         * Types of gifts accepted by the business account
         */
        protected AcceptedGiftTypes $acceptedGiftTypes,
    ) {
    }
}
