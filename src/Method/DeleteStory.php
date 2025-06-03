<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Story;

/**
 * Deletes a story previously posted by the bot on behalf of a managed business account. Requires the can_manage_stories business bot right.
 * Returns True on success.
 *
 * @extends Method<Story>
 */
final class DeleteStory extends Method
{
    protected static string $methodName = 'deleteStory';

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * Unique identifier of the story to delete
         */
        protected int $storyId,
    ) {
    }
}
