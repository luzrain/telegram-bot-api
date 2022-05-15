<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;

/**
 * Use this method to remove webhook integration if you decide to switch back to getUpdates. Returns True on success.
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
