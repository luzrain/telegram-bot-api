<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * Describes a task to add to a checklist.
 */
final readonly class InputChecklistTask extends Type
{
    protected function __construct(
        /**
         * Unique identifier of the task; must be positive and unique among all task identifiers currently present in the checklist
         */
        public int $id,

        /**
         * Text of the task; 1-100 characters after entities parsing
         */
        public string $text,

        /**
         * Optional. Mode for parsing entities in the text. See formatting options for more details.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        public string|null $parseMode = null,

        /**
         * Optional. List of special entities that appear in the text, which can be specified instead of parse_mode.
         * Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are allowed.
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $textEntities = null,
    ) {
    }
}
