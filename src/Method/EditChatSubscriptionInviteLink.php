<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\ChatInviteLink;

/**
 * Use this method to edit a subscription invite link created by the bot.
 * The bot must have the can_invite_users administrator rights.
 * Returns the edited invite link as a ChatInviteLink object.
 *
 * @extends Method<ChatInviteLink>
 */
final class EditChatSubscriptionInviteLink extends Method
{
    protected static string $methodName = 'editChatSubscriptionInviteLink';
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
    ) {
    }
}
