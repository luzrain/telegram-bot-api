<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Allows the bot to cancel or re-enable extension of a subscription paid in Telegram Stars.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class EditUserStarSubscription extends Method
{
    protected static string $methodName = 'editUserStarSubscription';

    public function __construct(
        /**
         * Identifier of the user whose subscription will be edited
         */
        protected int $userId,

        /**
         * Telegram payment identifier for the subscription
         */
        protected string $telegramPaymentChargeId,

        /**
         * Pass True to cancel extension of the user subscription; the subscription must be active up to the end of the current subscription period.
         * Pass False to allow the user to re-enable a subscription that was previously canceled by the bot.
         */
        protected bool $isCanceled,
    ) {
    }
}
