<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents a unique message identifier.
 */
class MessageId extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'message_id',
    ];

    protected static array $map = [
        'message_id' => true,
    ];

    /**
     * Unique message identifier
     */
    protected int $messageId;

    public function getMessageId(): int
    {
        return $this->messageId;
    }
}
