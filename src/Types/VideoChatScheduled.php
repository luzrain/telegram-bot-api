<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents a service message about a video chat scheduled in the chat.
 */
class VideoChatScheduled extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'start_date',
    ];

    protected static array $map = [
        'start_date' => true,
    ];

    /**
     * Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator
     */
    protected int $startDate;

    public function getStartDate(): int
    {
        return $this->startDate;
    }
}
