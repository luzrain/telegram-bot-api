<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents a location to which a chat is connected.
 */
final readonly class ChatLocation extends Type
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
