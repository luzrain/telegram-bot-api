<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to unban a previously banned user in a supergroup or channel.
 * The user will not return to the group or channel automatically, but will be able to join via link, etc.
 * The bot must be an administrator for this to work. By default, this method guarantees that after the call the useris not a
 * member of the chat, but will be able to join it. So if the user is a member of the chat they will also be removed from the chat.
 * If you don't want this, use the parameter only_if_banned.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class UnbanChatMember extends Method
{
    protected static string $methodName = 'unbanChatMember';

    public function __construct(
        /**
         * Unique identifier for the target group or username of the target supergroup or channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Unique identifier of the target user
         */
        protected int $userId,

        /**
         * Do nothing if the user is not banned
         */
        protected bool|null $onlyIfBanned = null,
    ) {
    }
}
