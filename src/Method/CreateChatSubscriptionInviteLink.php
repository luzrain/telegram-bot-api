<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\ChatInviteLink;

/**
 * Use this method to create a subscription invite link for a channel chat.
 * The bot must have the can_invite_users administrator rights.
 * The link can be edited using the method editChatSubscriptionInviteLink or revoked using the method revokeChatInviteLink.
 * Returns the new invite link as a ChatInviteLink object.
 *
 * @see https://telegram.org/blog/superchannels-star-reactions-subscriptions#star-subscriptions
 *
 * @extends Method<ChatInviteLink>
 */
final class CreateChatSubscriptionInviteLink extends Method
{
    protected static string $methodName = 'createChatSubscriptionInviteLink';
    protected static string $responseClass = ChatInviteLink::class;

    public function __construct(
        /**
         * Unique identifier for the target channel chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * The number of seconds the subscription will be active for before the next payment. Currently, it must always be 2592000 (30 days).
         */
        protected int $subscriptionPeriod,

        /**
         * The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat; 1-2500
         */
        protected int $subscriptionPrice,

        /**
         * Invite link name; 0-32 characters
         */
        protected string|null $name = null,
    ) {
    }
}
