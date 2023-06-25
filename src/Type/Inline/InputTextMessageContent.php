<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents the content of a text message to be sent as the result of an inline query.
 */
final class InputTextMessageContent extends BaseType implements InputMessageContent
{
    public function __construct(
        /**
         * Text of the message to be sent, 1-4096 characters
         */
        public string $messageText,

        /**
         * Optional. Mode for parsing entities in the message text. See formatting options for more details.
         */
        public string|null $parseMode = null,

        /**
         * Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
         *
         * @var list<MessageEntity>|null
         */
        public array|null $entities = null,

        /**
         * Optional. Disables link previews for links in the sent message
         */
        public bool|null $disableWebPagePreview = null,
    ) {
    }
}
