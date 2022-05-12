<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\Message;

/**
 * Use this method to send a game. On success, the sent Message is returned.
 */
final class SendGame extends BaseMethod
{
    protected static string $methodName = 'sendGame';
    protected static string $responseClass = Message::class;

    public function __construct(
 
        /**
         * Unique identifier for the target chat
         */
        protected int $userId,

        /**
         * Short name of the game, serves as the unique identifier for the game. Set up your games via Botfather.
         */
        protected string $gameShortName,

        /**
         * Sends the message silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the sent message from forwarding and saving
         */
        protected bool|null $protectContent = null,

        /**
         * If the message is a reply, ID of the original message
         */
        protected int|null $replyToMessageId = null,

        /**
         * Pass True, if the message should be sent even if the specified replied-to message is not found
         */
        protected bool|null $allowSendingWithoutReply = null,

        /**
         * A JSON-serialized object for an inline keyboard. If empty, one 'Play game_title' button will be shown.
         * If not empty, the first button must launch the game.
         */
        protected InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
    }
}
