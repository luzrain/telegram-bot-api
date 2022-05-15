<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * Contains information about why a request was unsuccessful.
 */
class ResponseParameters extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [];

    protected static array $map = [
        'migrate_to_chat_id' => true,
        'retry_after' => true,
    ];

    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier.
     * This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    protected ?int $migrateToChatId = null;

    /**
     * Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
     */
    protected ?int $retryAfter = null;

    public function getMigrateToChatId(): ?int
    {
        return $this->migrateToChatId;
    }

    public function getRetryAfter(): ?int
    {
        return $this->retryAfter;
    }
}
