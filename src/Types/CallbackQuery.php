<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents an incoming callback query from a callback button in an inline keyboard.
 * If the button that originated the query was attached to a message sent by the bot, the field message will be present.
 * If the button was attached to a message sent via the bot (in inline mode), the field inline_message_id will be present.
 * Exactly one of the fields data or game_short_name will be present.
 */
class CallbackQuery extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'id',
        'from',
        'chat_instance',
    ];

    protected static array $map = [
        'id' => true,
        'from' => User::class,
        'message' => Message::class,
        'inline_message_id' => true,
        'chat_instance' => true,
        'data' => true,
        'game_short_name' => true,
    ];

    /**
     * Unique identifier for this query
     */
    protected string $id;

    /**
     * Sender
     */
    protected User $from;

    /**
     * Optional. Message with the callback button that originated the query.
     * Note that message content and message date will not be available if the message is too old
     */
    protected ?Message $message = null;

    /**
     * Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
     */
    protected ?string $inlineMessageId = null;

    /**
     * Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent.
     * Useful for high scores in games.
     */
    protected string $chatInstance;

    /**
     * Optional. Data associated with the callback button.Be aware that a bad client can send arbitrary data in this field.
     */
    protected ?string $data = null;

    /**
     * Optional. Short name of a Game to be returned, serves as the unique identifier for the game
     */
    protected ?string $gameShortName = null;

    public function getId(): string
    {
        return $this->id;
    }

    public function getFrom(): User
    {
        return $this->from;
    }

    public function getMessage(): ?Message
    {
        return $this->message;
    }

    public function getInlineMessageId(): ?string
    {
        return $this->inlineMessageId;
    }

    public function getChatInstance(): string
    {
        return $this->chatInstance;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function getGameShortName(): ?string
    {
        return $this->gameShortName;
    }
}
