<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes the current status of a webhook.
 */
final readonly class WebhookInfo extends Type
{
    protected function __construct(
        /**
         * Webhook URL, may be empty if webhook is not set up
         */
        public string $url,

        /**
         * True, if a custom certificate was provided for webhook certificate checks
         */
        public bool $hasCustomCertificate,

        /**
         * Number of updates awaiting delivery
         */
        public int $pendingUpdateCount,

        /**
         * Optional. Currently used webhook IP address
         */
        public string|null $ipAddress = null,

        /**
         * Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
         */
        public int|null $lastErrorDate = null,

        /**
         * Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
         */
        public string|null $lastErrorMessage = null,

        /**
         * Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters
         */
        public int|null $lastSynchronizationErrorDate = null,

        /**
         * Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
         */
        public int|null $maxConnections = null,

        /**
         * Optional. A list of update types the bot is subscribed to. Defaults to all update types except chat_member
         *
         * @var list<string>|null
         */
        public array|null $allowedUpdates = null,
    ) {
    }
}
