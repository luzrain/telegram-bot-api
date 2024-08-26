<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * Represents an invite link for a chat.
 */
final readonly class ChatInviteLink extends Type
{
    protected function __construct(
        /**
         * The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with "…".
         */
        public string $inviteLink,

        /**
         * Creator of the link
         */
        public User $creator,

        /**
         * True, if users joining the chat via the link need to be approved by chat administrators
         */
        public bool $createsJoinRequest,

        /**
         * True, if the link is primary
         */
        public bool $isPrimary,

        /**
         * True, if the link is revoked
         */
        public bool $isRevoked,

        /**
         * Optional. Invite link name
         */
        public string|null $name = null,

        /**
         * Optional. Point in time (Unix timestamp) when the link will expire or has been expired
         */
        public int|null $expireDate = null,

        /**
         * Optional. Maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
         */
        public int|null $memberLimit = null,

        /**
         * Optional. Number of pending join requests created using this link
         */
        public int|null $pendingJoinRequestCount = null,

        /**
         * Optional. The number of seconds the subscription will be active for before the next payment
         */
        public int|null $subscriptionPeriod = null,

        /**
         * Optional. The amount of Telegram Stars a user must pay initially and after each subsequent subscription period
         * to be a member of the chat using the link
         */
        public int|null $subscriptionPrice = null,
    ) {
    }
}
