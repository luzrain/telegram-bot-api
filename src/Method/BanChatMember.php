<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to ban a user in a group, a supergroup or a channel.
 * In the case of supergroups and channels, the user will not be able to return to the chat on their own using invitelinks, etc., unless unbanned first.
 * The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights.
 * Returns True on success.
 *
 * @extends BaseMethod<true>
 */
final class BanChatMember extends BaseMethod
{
    protected static string $methodName = 'banChatMember';

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
         * Date when the user will be unbanned, unix time.
         * If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever.
         * Applied for supergroups and channels only.
         */
        protected int|null $untilDate = null,

        /**
         * Pass True to delete all messages from the chat for the user that is being removed.
         * If False, the user will be able to see messages in the group that were sent before the user was removed.
         * Always True for supergroups and channels.
         */
        protected bool|null $revokeMessages = null,
    ) {
    }
}
