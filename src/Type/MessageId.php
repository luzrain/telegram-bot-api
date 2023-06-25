<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a unique message identifier.
 */
final class MessageId extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * Unique message identifier
         */
        public int $messageId,
    ) {
    }
}
