<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Represents a location to which a chat is connected.
 */
final class ChatLocation extends BaseType implements TypeInterface
{
    protected function __construct(
        /**
         * The location to which the supergroup is connected. Can't be a live location.
         */
        public Location $location,

        /**
         * Location address; 1-64 characters, as defined by the chat owner
         */
        public string $address,
    ) {
    }
}
