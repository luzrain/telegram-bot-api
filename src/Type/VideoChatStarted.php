<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a service message about a video chat started in the chat. Currently holds no information.
 */
final class VideoChatStarted extends BaseType implements TypeInterface
{
    protected function __construct()
    {
    }
}
