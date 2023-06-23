<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

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
