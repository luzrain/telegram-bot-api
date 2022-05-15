<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents a Telegram user or bot.
 */
class User extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'id',
        'is_bot',
        'first_name',
    ];

    protected static array $map = [
        'id' => true,
        'is_bot' => true,
        'first_name' => true,
        'last_name' => true,
        'username' => true,
        'language_code' => true,
        'can_join_groups' => true,
        'can_read_all_group_messages' => true,
        'supports_inline_queries' => true,
    ];

    /**
     * Unique identifier for this user or bot
     */
    protected int $id;

    /**
     * True, if this user is a bot
     */
    protected bool $isBot;

    /**
     * User's or bot's first name
     */
    protected string $firstName;

    /**
     * Optional. User's or bot's last name
     */
    protected ?string $lastName = null;

    /**
     * Optional. User's or bot's username
     */
    protected ?string $username = null;

    /**
     * Optional. IETF language tag of the user's language
     */
    protected ?string $languageCode = null;

    /**
     * Optional. True, if the bot can be invited to groups. Returned only in getMe.
     */
    protected ?bool $canJoinGroups = null;

    /**
     * Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     */
    protected ?bool $canReadAllGroupMessages = null;

    /**
     * Optional. True, if the bot supports inline queries. Returned only in getMe.
     */
    protected ?bool $supportsInlineQueries = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function isBot(): bool
    {
        return $this->isBot;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }

    public function isCanJoinGroups(): ?bool
    {
        return $this->canJoinGroups;
    }

    public function isCanReadAllGroupMessages(): ?bool
    {
        return $this->canReadAllGroupMessages;
    }

    public function isSupportsInlineQueries(): ?bool
    {
        return $this->supportsInlineQueries;
    }
}
