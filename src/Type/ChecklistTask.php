<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * Describes a task in a checklist.
 */
final readonly class ChecklistTask extends Type
{
    protected function __construct(
        /**
         * Unique identifier of the task
         */
        public int $id,

        /**
         * Text of the task
         */
        public string $text,

        /**
         * Optional. Special entities that appear in the task text
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $textEntities = null,

        /**
         * Optional. User that completed the task; omitted if the task wasn't completed
         */
        public User|null $completedByUser = null,

        /**
         * Optional. Point in time (Unix timestamp) when the task was completed; 0 if the task wasn't completed
         */
        public int|null $completionDate = null,
    ) {
    }
}
