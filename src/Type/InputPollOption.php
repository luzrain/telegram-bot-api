<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object contains information about one answer option in a poll to send.
 */
final readonly class InputPollOption extends Type
{
    protected function __construct(
        /**
         * Option text, 1-100 characters
         */
        public string $text,

        /**
         * Optional. Mode for parsing entities in the text. See formatting options for more details. Currently, only custom emoji entities are allowed
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        public string|null $textParseMode = null,

        /**
         * Optional. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of text_parse_mode
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $textEntities = null,
    ) {
    }
}
