<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\InputStoryContent;
use Luzrain\TelegramBotApi\Type\MessageEntity;
use Luzrain\TelegramBotApi\Type\Story;
use Luzrain\TelegramBotApi\Type\StoryArea;

/**
 * Edits a story previously posted by the bot on behalf of a managed business account. Requires the can_manage_stories business bot right.
 * Returns Story on success.
 *
 * @extends Method<Story>
 */
final class EditStory extends Method
{
    protected static string $methodName = 'editStory';
    protected static string $responseClass = Story::class;

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * Unique identifier of the story to edit
         */
        protected int $storyId,

        /**
         * Content of the story
         */
        protected InputStoryContent $content,

        /**
         * Caption of the story, 0-2048 characters after entities parsing
         */
        protected string|null $caption = null,

        /**
         * Mode for parsing entities in the story caption. See formatting options for more details.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        protected string|null $parseMode = null,

        /**
         * A JSON-serialized list of special entities that appear in the caption, which can be specified instead of parse_mode
         *
         * @var list<MessageEntity>|null
         */
        protected array|null $captionEntities = null,

        /**
         * A JSON-serialized list of clickable areas to be shown on the story
         *
         * @var list<StoryArea>|null
         */
        protected array|null $areas = null,
    ) {
    }
}
