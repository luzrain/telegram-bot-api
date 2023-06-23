<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents an inline button that switches the current user to inline mode in a chosen chat, with an optional default inline query.
 */
class SwitchInlineQueryChosenChat extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [];

    protected static array $map = [
        'query' => true,
        'allow_user_chats' => true,
        'allow_bot_chats' => true,
        'allow_group_chats' => true,
        'allow_channel_chats' => true,
    ];

    /**
     * Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted
     */
    protected string|null $query = null;

    /**
     * Optional. True, if private chats with users can be chosen
     */
    protected bool|null $allowUserChats = null;

    /**
     * Optional. True, if private chats with bots can be chosen
     */
    protected bool|null $allowBotChats = null;

    /**
     * Optional. True, if group and supergroup chats can be chosen
     */
    protected bool|null $allowGroupChats = null;

    /**
     * Optional. True, if channel chats can be chosen
     */
    protected bool|null $allowChannelChats = null;

    public static function create(
        string|null $query = null,
        bool|null $allowUserChats = null,
        bool|null $allowBotChats = null,
        bool|null $allowGroupChats = null,
        bool|null $allowChannelChats = null,
    ) {
        $instance = new self();
        $instance->query = $query;
        $instance->allowUserChats = $allowUserChats;
        $instance->allowBotChats = $allowBotChats;
        $instance->allowGroupChats = $allowGroupChats;
        $instance->allowChannelChats = $allowChannelChats;

        return $instance;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function getAllowUserChats(): bool|null
    {
        return $this->allowUserChats;
    }

    public function getAllowBotChats(): bool|null
    {
        return $this->allowBotChats;
    }

    public function getAllowGroupChats(): bool|null
    {
        return $this->allowGroupChats;
    }

    public function getAllowChannelChats(): bool|null
    {
        return $this->allowChannelChats;
    }
}
