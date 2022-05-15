<?php

namespace TelegramBot\Api\Types\Games;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
use TelegramBot\Api\Types\Animation;
use TelegramBot\Api\Types\Arrays\ArrayOfMessageEntity;
use TelegramBot\Api\Types\Arrays\ArrayOfPhotoSize;
use TelegramBot\Api\Types\MessageEntity;
use TelegramBot\Api\Types\PhotoSize;

/**
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 */
class Game extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'title',
        'description',
        'photo',
    ];

    protected static array $map = [
        'title' => true,
        'description' => true,
        'photo' => ArrayOfPhotoSize::class,
        'text' => true,
        'text_entities' => ArrayOfMessageEntity::class,
        'animation' => Animation::class,
    ];

    /**
     * Title of the game
     */
    protected string $title;

    /**
     * Description of the game
     */
    protected string $description;

    /**
     * Photo that will be displayed in the game message in chats.
     *
     * @var PhotoSize[]
     */
    protected array $photo;

    /**
     * Optional. Brief description of the game or high scores included in the game message.
     * Can be automatically edited to include current high scores for the game when the bot calls setGameScore,
     * or manually edited using editMessageText. 0-4096 characters.
     */
    protected ?string $text = null;

    /**
     * Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
     *
     * @var MessageEntity[]
     */
    protected ?array $textEntities = null;

    /**
     * Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
     */
    protected ?Animation $animation = null;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPhoto(): array
    {
        return $this->photo;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function getTextEntities(): ?array
    {
        return $this->textEntities;
    }

    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }
}
