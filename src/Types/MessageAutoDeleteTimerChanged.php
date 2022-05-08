<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents a service message about a change in auto-delete timer settings.
 */
class MessageAutoDeleteTimerChanged extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'message_auto_delete_time',
    ];

    protected static array $map = [
        'message_auto_delete_time' => true,
    ];

    /**
     * New auto-delete time for messages in the chat; in seconds
     */
    protected int $messageAutoDeleteTime;

    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }
}
