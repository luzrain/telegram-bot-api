<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Location;
use Luzrain\TelegramBotApi\Type\User;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents an incoming inline query.
 * When the user sends an empty query, your bot could return some default or trending results.
 */
final readonly class InlineQuery extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Unique identifier for this query
         */
        public string $id,

        /**
         * Sender
         */
        public User $from,

        /**
         * Text of the query (up to 256 characters)
         */
        public string $query,

        /**
         * Offset of the results to be returned, can be controlled by the bot
         */
        public string $offset,

        /**
         * Optional. Type of the chat, from which the inline query was sent.
         * Can be either "sender" for a private chat with the inline query sender, "private", "group", "supergroup", or "channel".
         * The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat
         */
        public string|null $chatType = null,

        /**
         * Optional. Sender location, only for bots that request user location
         */
        public Location|null $location = null,
    ) {
    }
}
