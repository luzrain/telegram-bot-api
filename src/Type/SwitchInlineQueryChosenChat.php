<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents an inline button that switches the current user to inline mode in a chosen chat, with an optional default inline query.
 */
final readonly class SwitchInlineQueryChosenChat extends BaseType implements TypeInterface
{
    public function __construct(
        /**
         * Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted
         */
        public string|null $query = null,

        /**
         * Optional. True, if private chats with users can be chosen
         */
        public bool|null $allowUserChats = null,

        /**
         * Optional. True, if private chats with bots can be chosen
         */
        public bool|null $allowBotChats = null,

        /**
         * Optional. True, if group and supergroup chats can be chosen
         */
        public bool|null $allowGroupChats = null,

        /**
         * Optional. True, if channel chats can be chosen
         */
        public bool|null $allowChannelChats = null,
    ) {
    }
}
