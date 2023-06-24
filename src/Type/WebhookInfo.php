<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Contains information about the current status of a webhook.
 */
final class WebhookInfo extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'url',
        'has_custom_certificate',
        'pending_update_count',
    ];

    protected static array $map = [
        'url' => true,
        'has_custom_certificate' => true,
        'pending_update_count' => true,
        'ip_address' => true,
        'last_error_date' => true,
        'last_error_message' => true,
        'last_synchronization_error_date' => true,
        'max_connections' => true,
        'allowed_updates' => true,
    ];

    /**
     * Webhook URL, may be empty if webhook is not set up
     */
    protected string $url;

    /**
     * True, if a custom certificate was provided for webhook certificate checks
     */
    protected bool $hasCustomCertificate;

    /**
     * Number of updates awaiting delivery
     */
    protected int $pendingUpdateCount;

    /**
     * Optional. Currently used webhook IP address
     */
    protected string|null $ipAddress = null;

    /**
     * Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook
     */
    protected int|null $lastErrorDate = null;

    /**
     * Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
     */
    protected string|null $lastErrorMessage = null;

    /**
     * Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters
     */
    protected int|null $lastSynchronizationErrorDate = null;

    /**
     * Optional. Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
     */
    protected int|null $maxConnections = null;

    /**
     * Optional. A list of update types the bot is subscribed to. Defaults to all update types except chat_member
     *
     * @var string[]
     */
    protected array|null $allowedUpdates = null;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function hasCustomCertificate(): bool
    {
        return $this->hasCustomCertificate;
    }

    public function getPendingUpdateCount(): int
    {
        return $this->pendingUpdateCount;
    }

    public function getIpAddress(): string|null
    {
        return $this->ipAddress;
    }

    public function getLastErrorDate(): int|null
    {
        return $this->lastErrorDate;
    }

    public function getLastErrorMessage(): string|null
    {
        return $this->lastErrorMessage;
    }

    public function getLastSynchronizationErrorDate(): int|null
    {
        return $this->lastSynchronizationErrorDate;
    }

    public function getMaxConnections(): int|null
    {
        return $this->maxConnections;
    }

    /**
     * @return string[]|null
     */
    public function getAllowedUpdates(): array|null
    {
        return $this->allowedUpdates;
    }
}
