<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents a service message about a video chat ended in the chat.
 */
class VideoChatEnded extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'duration',
    ];

    protected static array $map = [
        'duration' => true,
    ];

    /**
     * Video chat duration in seconds
     */
    protected int $duration;

    public function getDuration(): int
    {
        return $this->duration;
    }
}
