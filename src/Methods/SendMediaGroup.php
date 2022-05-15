<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\Arrays\ArrayOfMessages;

/**
 * Use this method to send a group of photos, videos, documents or audios as an album.
 * Documents and audio files can be only grouped in an album with messages of the same type.
 * On success, an array of Messages that were sent is returned.
 */
final class SendMediaGroup extends BaseMethod
{
    protected static string $methodName = 'sendMediaGroup';
    protected static string $responseClass = ArrayOfMessages::class;

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Array of InputMediaAudio, InputMediaDocument, InputMediaPhoto and InputMediaVideo
         */
        protected array $media,

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
         * Pass True, if the message should be sent even if the specified replied-to message is not found
         */
        protected bool|null $allowSendingWithoutReply = null,
    ) {
    }
}
