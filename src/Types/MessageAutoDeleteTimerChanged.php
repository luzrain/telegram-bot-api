<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

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
