<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\InputChecklist;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\ReplyParameters;

/**
 * Use this method to send a checklist on behalf of a connected business account.
 * On success, the sent Message is returned.
 *
 * @extends Method<Message>
 */
final class SendChecklist extends Method
{
    protected static string $methodName = 'sendChecklist';
    protected static string $responseClass = Message::class;

    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will be sent
         */
        protected string $businessConnectionId,

        /**
         * Unique identifier for the target chat
         */
        protected int $chatId,

        /**
         * A JSON-serialized object for the checklist to send
         */
        protected InputChecklist $checklist,

        /**
         * Sends the message silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the sent message from forwarding and saving
         */
        protected bool|null $protectContent = null,

        /**
         * Unique identifier of the message effect to be added to the message
         */
        protected string|null $messageEffectId = null,

        /**
         * A JSON-serialized object for description of the message to reply to
         */
        protected ReplyParameters|null $replyParameters = null,

        /**
         * A JSON-serialized object for an inline keyboard
         */
        protected InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
    }
}
