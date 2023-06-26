<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to remove webhook integration if you decide to switch back to getUpdates.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class DeleteWebhook extends Method
{
    protected static string $methodName = 'deleteWebhook';

    public function __construct(
        /**
         * Pass True to drop all pending updates
         */
        protected bool|null $dropPendingUpdates = null,
    ) {
    }
}
