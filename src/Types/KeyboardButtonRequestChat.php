<?php

declare(strict_types=1);

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object defines the criteria used to request a suitable chat.
 * The identifier of the selected chat will be shared with the bot when the corresponding button is pressed.
 * More about requesting chats »
 * @see https://core.telegram.org/bots/features#chat-and-user-selection
 */
class KeyboardButtonRequestChat extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'request_id',
        'chat_is_channel',
    ];

    protected static array $map = [
        'request_id' => true,
        'chat_is_channel' => true,
        'chat_is_forum' => true,
        'chat_has_username' => true,
        'chat_is_created' => true,
        'user_administrator_rights' => ChatAdministratorRights::class,
        'bot_administrator_rights' => ChatAdministratorRights::class,
        'bot_is_member' => true,
    ];

    /**
     * Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message
     */
    protected int $requestId;

    /**
     * Pass True to request a channel chat, pass False to request a group or a supergroup chat.
     */
    protected bool $chatIsChannel;

    /**
     * Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat.
     * If not specified, no additional restrictions are applied.
     */
    protected ?bool $chatIsForum = null;

    /**
     * Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username.
     * If not specified, no additional restrictions are applied.
     */
    protected ?bool $chatHasUsername = null;

    /**
     * Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied.
     */
    protected ?bool $chatIsCreated = null;

    /**
     * Optional. A JSON-serialized object listing the required administrator rights of the user in the chat.
     * The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied.
     */
    protected ?ChatAdministratorRights $userAdministratorRights = null;

    /**
     * Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat.
     * The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied.
     */
    protected ?ChatAdministratorRights $botAdministratorRights = null;

    /**
     * Optional. Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
     */
    protected ?bool $botIsMember = null;

    public static function create(
        int $requestId,
        bool $chatIsChannel,
        ?bool $chatIsForum = null,
        ?bool $chatHasUsername = null,
        ?bool $chatIsCreated = null,
        ?bool $userAdministratorRights = null,
        ?bool $botAdministratorRights = null,
        ?bool $botIsMember = null,
    ): self {
        $instance = new self();
        $instance->requestId = $requestId;
        $instance->chatIsChannel = $chatIsChannel;
        $instance->chatIsForum = $chatIsForum;
        $instance->chatHasUsername = $chatHasUsername;
        $instance->chatIsCreated = $chatIsCreated;
        $instance->userAdministratorRights = $userAdministratorRights;
        $instance->botAdministratorRights = $botAdministratorRights;
        $instance->botIsMember = $botIsMember;

        return $instance;
    }

    public function getRequestId(): int
    {
        return $this->requestId;
    }

    public function isChatIsChannel(): bool
    {
        return $this->chatIsChannel;
    }

    public function getChatIsForum(): ?bool
    {
        return $this->chatIsForum;
    }

    public function getChatHasUsername(): ?bool
    {
        return $this->chatHasUsername;
    }

    public function getChatIsCreated(): ?bool
    {
        return $this->chatIsCreated;
    }

    public function getUserAdministratorRights(): ?ChatAdministratorRights
    {
        return $this->userAdministratorRights;
    }

    public function getBotAdministratorRights(): ?ChatAdministratorRights
    {
        return $this->botAdministratorRights;
    }

    public function getBotIsMember(): ?bool
    {
        return $this->botIsMember;
    }

}
