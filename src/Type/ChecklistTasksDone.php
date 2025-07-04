<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Describes a service message about checklist tasks marked as done or not done.
 */
final readonly class ChecklistTasksDone extends Type
{
    protected function __construct(
        /**
         * Optional. Message containing the checklist whose tasks were marked as done or not done.
         * Note that the Message object in this field will not contain the reply_to_message field even if it itself is a reply.
         */
        public Message|null $checklistMessage = null,

        /**
         * Optional. Identifiers of the tasks that were marked as done
         *
         * @var list<int>|null
         */
        public array|null $markedAsDoneTaskIds = null,

        /**
         * Optional. Identifiers of the tasks that were marked as not done
         *
         * @var list<int>|null
         */
        public array|null $markedAsNotDoneTaskIds = null,
    ) {
    }
}
