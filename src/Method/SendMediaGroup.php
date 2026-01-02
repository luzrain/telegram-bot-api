<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\InputMediaAudio;
use Luzrain\TelegramBotApi\Type\InputMediaDocument;
use Luzrain\TelegramBotApi\Type\InputMediaPhoto;
use Luzrain\TelegramBotApi\Type\InputMediaVideo;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\ReplyParameters;

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
    protected static string $responseClass = Message::class;
    protected static bool $isArrayOfResponse = true;

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
         * Unique identifier of the business connection on behalf of which the message will be sent
         */
        protected string|null $businessConnectionId = null,

        /**
         * Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
         */
        protected int|null $messageThreadId = null,

        /**
         * Identifier of the direct messages topic to which the messages will be sent; required if the messages are sent to a direct messages chat
         */
        protected int|null $directMessagesTopicId = null,

        /**
         * Sends messages silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the sent messages from forwarding and saving
         */
        protected bool|null $protectContent = null,

        /**
         * Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message.
         * The relevant Stars will be withdrawn from the bot's balance
         */
        protected bool|null $allowPaidBroadcast = null,

        /**
         * Unique identifier of the message effect to be added to the message; for private chats only
         */
        protected string|null $messageEffectId = null,

        /**
         * Description of the message to reply to
         */
        protected ReplyParameters|null $replyParameters = null,
    ) {
    }
}
