<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object contains information about the quoted part of a message that is replied to by the given message.
 */
final readonly class TextQuote extends Type
{
    public function __construct(
        /**
         * Text of the quoted part of a message that is replied to by the given message
         */
        public string $text,

        /**
         * Optional. Special entities that appear in the quote.
         * Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are kept in quotes.
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $entities = null,

        /**
         * Approximate quote position in the original message in UTF-16 code units as specified by the sender
         */
        public int|null $position = null,

        /**
         * Optional. True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.
         */
        public true|null $isManual = null,
    ) {
    }
}
