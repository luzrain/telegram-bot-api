<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\InputStoryContent;
use Luzrain\TelegramBotApi\Type\MessageEntity;
use Luzrain\TelegramBotApi\Type\Story;
use Luzrain\TelegramBotApi\Type\StoryArea;

/**
 * Posts a story on behalf of a managed business account. Requires the can_manage_stories business bot right.
 * Returns Story on success.
 *
 * @extends Method<Story>
 */
final class PostStory extends Method
{
    protected static string $methodName = 'postStory';
    protected static string $responseClass = Story::class;

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * Content of the story
         */
        protected InputStoryContent $content,

        /**
         * Period after which the story is moved to the archive, in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400
         */
        protected int $activePeriod,

        /**
         * Caption of the story, 0-2048 characters after entities parsing
         */
        protected string|null $caption = null,

        /**
         * Mode for parsing entities in the story caption. See formatting options for more details.
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

        /**
         * Pass True to keep the story accessible after it expires
         */
        protected bool|null $postToChatPage = null,

        /**
         * Pass True if the content of the story must be protected from forwarding and screenshotting
         */
        protected bool|null $protectContent = null,
    ) {
    }
}
