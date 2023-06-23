<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

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
