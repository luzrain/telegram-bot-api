<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;

/**
 * Represents a Game.
 */
final class InlineQueryResultGame extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'game_short_name' => true,
        'reply_markup' => InlineKeyboardMarkup::class,
    ];

    /**
     * Type of the result, must be game
     */
    protected string $type = 'game';

    /**
     * Unique identifier for this result, 1-64 bytes
     */
    protected string $id;

    /**
     * Short name of the game
     */
    protected string $gameShortName;

    /**
     * Optional. Inline keyboard attached to the message
     */
    protected InlineKeyboardMarkup|null $replyMarkup = null;

    public static function create(
        string $id,
        string $gameShortName,
        InlineKeyboardMarkup|null $replyMarkup = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->gameShortName = $gameShortName;
        $instance->replyMarkup = $replyMarkup;

        return $instance;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getGameShortName(): string
    {
        return $this->gameShortName;
    }

    public function getReplyMarkup(): InlineKeyboardMarkup|null
    {
        return $this->replyMarkup;
    }
}
