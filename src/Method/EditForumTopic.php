<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to edit name and icon of a topic in a forum supergroup chat.
 * The bot must be an administrator in the chat for this to work and must have can_manage_topics administrator rights,
 * unless it is the creator of the topic.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class EditForumTopic extends Method
{
    protected static string $methodName = 'editForumTopic';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
         */
        protected int|string $chatId,

        /**
         * Unique identifier for the target message thread of the forum topic
         */
        protected int $messageThreadId,

        /**
         * New topic name, 0-128 characters. If not specified or empty, the current name of the topic will be kept
         */
        protected string|null $name = null,

        /**
         * New unique identifier of the custom emoji shown as the topic icon.
         * Use getForumTopicIconStickers to get all allowed custom emoji identifiers.
         * Pass an empty string to remove the icon. If not specified, the current icon will be kept
         */
        protected string|null $iconCustomEmojiId = null,
    ) {
    }
}
