<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * Describes a checklist to create.
 */
final readonly class InputChecklist extends Type
{
    protected function __construct(
        /**
         * Title of the checklist; 1-255 characters after entities parsing
         */
        public string $title,

        /**
         * List of 1-30 tasks in the checklist
         *
         * @var list<ChecklistTask>
         */
        #[ArrayType(ChecklistTask::class)]
        public array $tasks,

        /**
         * Optional. Mode for parsing entities in the title. See formatting options for more details.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        public string|null $parseMode = null,

        /**
         * Optional. List of special entities that appear in the title, which can be specified instead of parse_mode.
         * Currently, only bold, italic, underline, strikethrough, spoiler, and custom_emoji entities are allowed.
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $titleEntities = null,

        /**
         * Optional. Pass True if other users can add tasks to the checklist
         */
        public bool|null $othersCanAddTasks = null,

        /**
         * Optional. Pass True if other users can mark tasks as done or not done in the checklist
         */
        public bool|null $othersCanMarkTasksAsDone = null,
    ) {
    }
}
