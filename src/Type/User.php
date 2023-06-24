<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a Telegram user or bot.
 */
final class User extends BaseType implements TypeInterface
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
        'is_premium' => true,
        'added_to_attachment_menu' => true,
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
    protected string|null $lastName = null;

    /**
     * Optional. User's or bot's username
     */
    protected string|null $username = null;

    /**
     * Optional. IETF language tag of the user's language
     */
    protected string|null $languageCode = null;

    /**
     * Optional. True, if this user is a Telegram Premium user
     */
    protected bool|null $isPremium = null;

    /**
     * Optional. True, if this user added the bot to the attachment menu
     */
    protected bool|null $addedToAttachmentMenu = null;

    /**
     * Optional. True, if the bot can be invited to groups. Returned only in getMe.
     */
    protected bool|null $canJoinGroups = null;

    /**
     * Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     */
    protected bool|null $canReadAllGroupMessages = null;

    /**
     * Optional. True, if the bot supports inline queries. Returned only in getMe.
     */
    protected bool|null $supportsInlineQueries = null;

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

    public function getLastName(): string|null
    {
        return $this->lastName;
    }

    public function getUsername(): string|null
    {
        return $this->username;
    }

    public function getLanguageCode(): string|null
    {
        return $this->languageCode;
    }

    public function isPremium(): bool|null
    {
        return $this->isPremium;
    }

    public function getAddedToAttachmentMenu(): bool|null
    {
        return $this->addedToAttachmentMenu;
    }

    public function isCanJoinGroups(): bool|null
    {
        return $this->canJoinGroups;
    }

    public function isCanReadAllGroupMessages(): bool|null
    {
        return $this->canReadAllGroupMessages;
    }

    public function isSupportsInlineQueries(): bool|null
    {
        return $this->supportsInlineQueries;
    }
}
