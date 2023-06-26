<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\InputMedia;
use Luzrain\TelegramBotApi\Type\Message;

/**
 * Use this method to edit animation, audio, document, photo, or video messages.
 * If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document
 * for document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded;
 * use a previously uploaded file via its file_id or specify a URL. On success, if the edited message is not an inline message,
 * the edited Message is returned, otherwise True is returned.
 *
 * @todo: Check return type in real case
 * @extends Method<Message>
 */
final class EditMessageMedia extends Method
{
    protected static string $methodName = 'editMessageMedia';
    protected static string $responseClass = Message::class;

    public function __construct(
        /**
         * A JSON-serialized object for a new media content of the message
         */
        protected InputMedia $media,

        /**
         * Required if inline_message_id is not specified.
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string|null $chatId = null,

        /**
         * Required if inline_message_id is not specified. Identifier of the message to edit
         */
        protected int|null $messageId = null,

        /**
         * Required if chat_id and message_id are not specified. Identifier of the inline message
         */
        protected string|null $inlineMessageId = null,

        /**
         * A JSON-serialized object for a new inline keyboard.
         */
        protected InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
    }
}
