<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * Describes reply parameters for the message that is being sent.
 */
final readonly class ReplyParameters extends Type
{
    public function __construct(
        /**
         * Identifier of the message that will be replied to in the current chat, or in the chat chat_id if it is specified
         */
        public int $messageId,

        /**
         * Optional. If the message to be replied to is from a different chat,
         * unique identifier for the chat or username of the channel (in the format @channelusername).
         * Not supported for messages sent on behalf of a business account.
         */
        public int|string|null $chatId = null,

        /**
         * Optional. Pass True if the message should be sent even if the specified message to be replied to is not found;
         * can be used only for replies in the same chat and forum topic.
         */
        public bool|null $allowSendingWithoutReply = null,

        /**
         * Optional. Quoted part of the message to be replied to; 0-1024 characters after entities parsing.
         * The quote must be an exact substring of the message to be replied to, including bold, italic, underline, strikethrough,
         * spoiler, and custom_emoji entities. The message will fail to send if the quote isn't found in the original message.
         */
        public string|null $quote = null,

        /**
         * Optional. Mode for parsing entities in the quote. See formatting options for more details.
         *
         * @link https://core.telegram.org/bots/api#formatting-options
         */
        public string|null $quoteParseMode = null,

        /**
         * Optional. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of quote_parse_mode.
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $quoteEntities = null,

        /**
         * Optional. Position of the quote in the original message in UTF-16 code units
         */
        public int|null $quotePosition = null,
    ) {
    }
}
