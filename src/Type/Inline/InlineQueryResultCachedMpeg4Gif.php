<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound) stored on the Telegram servers.
 * By default, this animated MPEG-4 file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
final class InlineQueryResultCachedMpeg4Gif extends BaseType implements InlineQueryResult
{
    /**
     * Type of the result, must be mpeg4_gif
     */
    public string $type;

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         */
        public string $id,

        /**
         * A valid file identifier for the MP4 file
         */
        public string $mpeg4FileId,

        /**
         * Optional. Title for the result
         */
        public string|null $title = null,

        /**
         * Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
         */
        public string|null $caption = null,

        /**
         * Optional. Mode for parsing entities in the caption. See formatting options for more details.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        public string|null $parseMode = null,

        /**
         * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
         *
         * @var MessageEntity[]
         */
        public array|null $captionEntities = null,

        /**
         * Optional. Inline keyboard attached to the message
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,

        /**
         * Optional. Content of the message to be sent instead of the video animation
         */
        public InputMessageContent|null $inputMessageContent = null,
    ) {
        $this->type = 'mpeg4_gif';
    }
}
