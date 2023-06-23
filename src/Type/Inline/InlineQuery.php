<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\Location;
use Luzrain\TelegramBotApi\Type\User;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents an incoming inline query.
 * When the user sends an empty query, your bot could return some default or trending results.
 */
final class InlineQuery extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'id',
        'from',
        'query',
        'offset',
    ];

    protected static array $map = [
        'id' => true,
        'from' => User::class,
        'query' => true,
        'offset' => true,
        'chat_type' => true,
        'location' => Location::class,
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
     * Text of the query (up to 256 characters)
     */
    protected string $query;

    /**
     * Offset of the results to be returned, can be controlled by the bot
     */
    protected string $offset;

    /**
     * Optional. Type of the chat, from which the inline query was sent.
     * Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”.
     * The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat
     */
    protected ?string $chatType = null;

    /**
     * Optional. Sender location, only for bots that request user location
     */
    protected ?Location $location = null;

    public function getId(): string
    {
        return $this->id;
    }

    public function getFrom(): User
    {
        return $this->from;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getChatType(): ?string
    {
        return $this->chatType;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }
}
