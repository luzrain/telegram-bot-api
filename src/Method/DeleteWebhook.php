<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to remove webhook integration if you decide to switch back to getUpdates.
 * Returns True on success.
 *
 * @extends BaseMethod<true>
 */
final class DeleteWebhook extends BaseMethod
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