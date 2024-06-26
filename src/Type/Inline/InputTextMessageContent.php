<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\LinkPreviewOptions;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents the content of a text message to be sent as the result of an inline query.
 */
final readonly class InputTextMessageContent extends Type implements InputMessageContent
{
    public function __construct(
        /**
         * Text of the message to be sent, 1-4096 characters
         */
        public string $messageText,

        /**
         * Optional. Mode for parsing entities in the message text. See formatting options for more details.
         *
         * @link https://core.telegram.org/bots/api#formatting-options
         */
        public string|null $parseMode = null,

        /**
         * Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $entities = null,

        /**
         * Optional. Link preview generation options for the message
         */
        public LinkPreviewOptions|null $linkPreviewOptions = null,
    ) {
    }
}
