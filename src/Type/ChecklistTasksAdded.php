<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * Describes a service message about tasks added to a checklist.
 */
final readonly class ChecklistTasksAdded extends Type
{
    protected function __construct(
        /**
         * List of tasks added to the checklist
         *
         * @var list<ChecklistTask>
         */
        #[ArrayType(ChecklistTask::class)]
        public array $tasks,

        /**
         * Optional. Message containing the checklist to which the tasks were added.
         * Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
         */
        public Message|null $checklistMessage = null,
    ) {
    }
}
