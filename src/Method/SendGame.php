<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\Message;
use Luzrain\TelegramBotApi\Type\ReplyParameters;

/**
 * Use this method to send a game. On success, the sent Message is returned.
 *
 * @extends Method<Message>
 */
final class SendGame extends Method
{
    protected static string $methodName = 'sendGame';
    protected static string $responseClass = Message::class;

    public function __construct(
        /**
         * Unique identifier for the target chat
         */
        protected int $userId,

        /**
         * Short name of the game, serves as the unique identifier for the game. Set up your games via @BotFather.
         */
        protected string $gameShortName,

        /**
         * Unique identifier of the business connection on behalf of which the message will be sent
         */
        protected string|null $businessConnectionId = null,

        /**
         * Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
         */
        protected int|null $messageThreadId = null,

        /**
         * Sends the message silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the sent message from forwarding and saving
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

        /**
         * A JSON-serialized object for an inline keyboard. If empty, one 'Play game_title' button will be shown.
         * If not empty, the first button must launch the game.
         * Not supported for messages sent on behalf of a business account.
         */
        protected InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
    }
}
