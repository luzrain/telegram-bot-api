<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents a service message about a video chat started in the chat. Currently holds no information.
 */
class VideoChatStarted extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [];

    protected static array $map = [];
}
