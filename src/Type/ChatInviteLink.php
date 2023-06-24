<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Represents an invite link for a chat.
 */
final class ChatInviteLink extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'invite_link',
        'creator',
        'creates_join_request',
        'is_primary',
        'is_revoked',
    ];

    protected static array $map = [
        'invite_link' => true,
        'creator' => User::class,
        'creates_join_request' => true,
        'is_primary' => true,
        'is_revoked' => true,
        'name' => true,
        'expire_date' => true,
        'member_limit' => true,
        'pending_join_request_count' => true,
    ];

    /**
     * The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
     */
    protected string $inviteLink;

    /**
     * Creator of the link
     */
    protected User $creator;

    /**
     * True, if users joining the chat via the link need to be approved by chat administrators
     */
    protected bool $createsJoinRequest;

    /**
     * True, if the link is primary
     */
    protected bool $isPrimary;

    /**
     * True, if the link is revoked
     */
    protected bool $isRevoked;

    /**
     * Optional. Invite link name
     */
    protected string|null $name = null;

    /**
     * Optional. Point in time (Unix timestamp) when the link will expire or has been expired
     */
    protected int|null $expireDate = null;

    /**
     * Optional. Maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     */
    protected int|null $memberLimit = null;

    /**
     * Optional. Number of pending join requests created using this link
     */
    protected int|null $pendingJoinRequestCount = null;

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function getCreator(): User
    {
        return $this->creator;
    }

    public function getCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }

    public function isPrimary(): bool
    {
        return $this->isPrimary;
    }

    public function isRevoked(): bool
    {
        return $this->isRevoked;
    }

    public function getName(): string|null
    {
        return $this->name;
    }

    public function getExpireDate(): int|null
    {
        return $this->expireDate;
    }

    public function getMemberLimit(): int|null
    {
        return $this->memberLimit;
    }

    public function getPendingJoinRequestCount(): int|null
    {
        return $this->pendingJoinRequestCount;
    }
}
