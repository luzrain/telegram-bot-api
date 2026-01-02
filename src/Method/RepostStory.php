<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Story;

/**
 * Reposts a story on behalf of a business account from another business account.
 * Both business accounts must be managed by the same bot, and the story on the source account must have been posted (or reposted) by the bot.
 * Requires the can_manage_stories business bot right for both business accounts. Returns Story on success.
 *
 * @extends Method<Story>
 */
final class RepostStory extends Method
{
    protected static string $methodName = 'repostStory';
    protected static string $responseClass = Story::class;

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * Unique identifier of the chat which posted the story that should be reposted
         */
        protected int $fromChatId,

        /**
         * Unique identifier of the story that should be reposted
         */
        protected int $fromStoryId,

        /**
         * Period after which the story is moved to the archive, in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400
         */
        protected int $activePeriod,

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
