<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Type\ChatInviteLink;

/**
 * Use this method to edit a non-primary invite link created by the bot.
 * The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights.
 * Returns the edited invite link as a ChatInviteLink object.
 *
 * @extends BaseMethod<ChatInviteLink>
 */
final class EditChatInviteLink extends BaseMethod
{
    protected static string $methodName = 'editChatInviteLink';
    protected static string $responseClass = ChatInviteLink::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * The invite link to edit
         */
        protected string $inviteLink,

        /**
         * Invite link name; 0-32 characters
         */
        protected string|null $name = null,

        /**
         * Point in time (Unix timestamp) when the link will expire
         */
        protected int|null $expireDate = null,

        /**
         * Maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
         */
        protected int|null $memberLimit = null,

        /**
         * True, if users joining the chat via the link need to be approved by chat administrators. If True, member_limit can't be specified
         */
        protected bool|null $createsJoinRequest = null,
    ) {
    }
}
