<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to a photo stored on the Telegram servers.
 * By default, this photo will be sent by the user with an optional caption. Alternatively, you can use
 * input_message_content to send a message with the specified content instead of the photo.
 */
final readonly class InlineQueryResultCachedPhoto extends InlineQueryResult
{
    public const TYPE = 'photo';

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         */
        public string $id,

        /**
         * A valid file identifier of the photo
         */
        public string $photoFileId,

        /**
         * Optional. Title for the result
         */
        public string|null $title = null,

        /**
         * Optional. Short description of the result
         */
        public string|null $description = null,

        /**
         * Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing
         */
        public string|null $caption = null,

        /**
         * Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        public string|null $parseMode = null,

        /**
         * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $captionEntities = null,

        /**
         * Optional. Pass True, if the caption must be shown above the message media
         */
        public bool|null $showCaptionAboveMedia = null,

        /**
         * Optional. Inline keyboard attached to the message
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,

        /**
         * Optional. Content of the message to be sent instead of the photo
         */
        public InputMessageContent|null $inputMessageContent = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
