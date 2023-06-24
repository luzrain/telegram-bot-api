<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Contains information about why a request was unsuccessful.
 */
final class ResponseParameters extends BaseType implements TypeInterface
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
    protected int|null $migrateToChatId = null;

    /**
     * Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
     */
    protected int|null $retryAfter = null;

    public function getMigrateToChatId(): int|null
    {
        return $this->migrateToChatId;
    }

    public function getRetryAfter(): int|null
    {
        return $this->retryAfter;
    }
}
