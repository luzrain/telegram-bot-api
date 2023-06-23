<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a service message about a forum topic closed in the chat. Currently holds no information.
 */
final class ForumTopicClosed extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [];

    protected static array $map = [];
}
