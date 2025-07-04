<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * Describes a checklist.
 */
final readonly class Checklist extends Type
{
    protected function __construct(
        /**
         * Title of the checklist
         */
        public string $text,

        /**
         * List of tasks in the checklist
         *
         * @var list<ChecklistTask>
         */
        #[ArrayType(ChecklistTask::class)]
        public array $tasks,

        /**
         * Optional. Special entities that appear in the checklist title
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $titleEntities = null,

        /**
         * Optional. True, if users other than the creator of the list can add tasks to the list
         */
        public true|null $othersCanAddTasks = null,

        /**
         * Optional. True, if users other than the creator of the list can mark tasks as done or not done
         */
        public true|null $othersCanMarkTasksAsDone = null,
    ) {
    }
}
