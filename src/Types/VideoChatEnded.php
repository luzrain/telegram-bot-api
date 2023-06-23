<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a service message about a video chat ended in the chat.
 */
final class VideoChatEnded extends BaseType implements TypeInterface
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
