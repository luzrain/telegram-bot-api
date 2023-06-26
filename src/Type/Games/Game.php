<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Games;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\PropertyType;
use Luzrain\TelegramBotApi\Type\Animation;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessageEntityType;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfPhotoSizeType;
use Luzrain\TelegramBotApi\Type\MessageEntity;
use Luzrain\TelegramBotApi\Type\PhotoSize;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 */
final readonly class Game extends Type implements TypeDenormalizable
{
    protected function __construct(
        /**
         * Title of the game
         */
        public string $title,

        /**
         * Description of the game
         */
        public string $description,

        /**
         * Photo that will be displayed in the game message in chats.
         *
         * @var list<PhotoSize>
         */
        #[PropertyType(ArrayOfPhotoSizeType::class)]
        public array $photo,

        /**
         * Optional. Brief description of the game or high scores included in the game message.
         * Can be automatically edited to include current high scores for the game when the bot calls setGameScore,
         * or manually edited using editMessageText. 0-4096 characters.
         */
        public string|null $text = null,

        /**
         * Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
         *
         * @var list<MessageEntity>|null
         */
        #[PropertyType(ArrayOfMessageEntityType::class)]
        public array|null $textEntities = null,

        /**
         * Optional. Animation that will be displayed in the game message in chats. Upload via BotFather
         */
        public Animation|null $animation = null,
    ) {
    }
}
