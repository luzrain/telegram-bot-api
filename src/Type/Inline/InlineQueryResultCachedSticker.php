<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;

/**
 * Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the sticker.
 */
final readonly class InlineQueryResultCachedSticker extends Type implements InlineQueryResult
{
    /**
     * Type of the result, must be sticker
     */
    public string $type;

    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         */
        public string $id,

        /**
         * A valid file identifier of the sticker
         */
        public string $stickerFileId,

        /**
         * Optional. Inline keyboard attached to the message
         */
        public InlineKeyboardMarkup|null $replyMarkup = null,

        /**
         * Optional. Content of the message to be sent instead of the sticker
         */
        public InputMessageContent|null $inputMessageContent = null,
    ) {
        $this->type = 'sticker';
    }
}
