<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\ForceReply;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\ReplyKeyboardRemove;
use Luzrain\TelegramBotApi\Type\ReplyParameters;

/**
 * Use this method to send phone contacts. On success, the sent Message is returned.
 *
 * @extends Method<Message>
 */
final class SendContact extends Method
{
    protected static string $methodName = 'sendContact';
    protected static string $responseClass = Message::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Contact's phone number
         */
        protected string $phoneNumber,

        /**
         * Contact's first name
         */
        protected string $firstName,

        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
         */
        protected int|null $messageThreadId = null,

        /**
         * Contact's last name
         */
        protected string|null $lastName = null,

        /**
         * Additional data about the contact in the form of a vCard, 0-2048 bytes
         */
        protected string|null $vcard = null,

        /**
         * Sends the message silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the sent message from forwarding and saving
         */
        protected bool|null $protectContent = null,

        /**
         * Description of the message to reply to
         */
        protected ReplyParameters|null $replyParameters = null,

        /**
         * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
         * instructions to remove reply keyboard or to force a reply from the user.
         */
        protected InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null,
    ) {
    }
}
