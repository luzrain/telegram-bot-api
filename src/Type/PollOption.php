<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * This object contains information about one answer option in a poll.
 */
final readonly class PollOption extends Type
{
    protected function __construct(
        /**
         * Option text, 1-100 characters
         */
        public string $text,

        /**
         * Number of users that voted for this option
         */
        public int $voterCount,

        /**
         * Optional. Special entities that appear in the option text. Currently, only custom emoji entities are allowed in poll option texts
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $textEntities = null,
    ) {
    }
}
