<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Arrays\ArrayOfMessagesType;
use Luzrain\TelegramBotApi\Type\InputMediaAudio;
use Luzrain\TelegramBotApi\Type\InputMediaDocument;
use Luzrain\TelegramBotApi\Type\InputMediaPhoto;
use Luzrain\TelegramBotApi\Type\InputMediaVideo;
use Luzrain\TelegramBotApi\Type\Message;

/**
 * Use this method to send a group of photos, videos, documents or audios as an album.
 * Documents and audio files can be only grouped in an album with messages of the same type.
 * On success, an array of Messages that were sent is returned.
 *
 * @extends Method<list<Message>>
 */
final class SendMediaGroup extends Method
{
    protected static string $methodName = 'sendMediaGroup';
    protected static string $responseClass = ArrayOfMessagesType::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * A JSON-serialized array describing messages to be sent, must include 2-10 items
         *
         * @var list<InputMediaAudio|InputMediaDocument|InputMediaPhoto|InputMediaVideo>
         */
        protected array $media,

        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
         */
        protected int|null $messageThreadId = null,

        /**
         * Sends messages silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the sent messages from forwarding and saving
         */
        protected bool|null $protectContent = null,

        /**
         * If the messages are a reply, ID of the original message
         */
        protected int|null $replyToMessageId = null,

        /**
         * Pass True if the message should be sent even if the specified replied-to message is not found
         */
        protected bool|null $allowSendingWithoutReply = null,
    ) {
    }
}
