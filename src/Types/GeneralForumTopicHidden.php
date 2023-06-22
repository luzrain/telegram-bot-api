<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents a service message about General forum topic hidden in the chat. Currently holds no information.
 */
class GeneralForumTopicHidden extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [];

    protected static array $map = [];
}
