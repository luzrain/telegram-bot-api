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
 * Use this method to send point on the map. On success, the sent Message is returned.
 *
 * @extends Method<Message>
 */
final class SendLocation extends Method
{
    protected static string $methodName = 'sendLocation';
    protected static string $responseClass = Message::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Latitude of the location
         */
        protected float $latitude,

        /**
         * Longitude of the location
         */
        protected float $longitude,

        /**
         * Unique identifier of the business connection on behalf of which the message will be sent
         */
        protected string|null $businessConnectionId = null,

        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
         */
        protected int|null $messageThreadId = null,

        /**
         * The radius of uncertainty for the location, measured in meters; 0-1500
         */
        protected float|null $horizontalAccuracy = null,

        /**
         * Period in seconds for which the location will be updated (see Live Locations, should be between 60 and 86400.
         */
        protected int|null $livePeriod = null,

        /**
         * For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
         */
        protected int|null $heading = null,

        /**
         * For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters.
         * Must be between 1 and 100000 if specified.
         */
        protected int|null $proximityAlertRadius = null,

        /**
         * Sends the message silently. Users will receive a notification with no sound.
         */
        protected bool|null $disableNotification = null,

        /**
         * Protects the contents of the sent message from forwarding and saving
         */
        protected bool|null $protectContent = null,

        /**
         * Unique identifier of the message effect to be added to the message; for private chats only
         */
        protected string|null $messageEffectId = null,

        /**
         * Description of the message to reply to
         */
        protected ReplyParameters|null $replyParameters = null,

        /**
         * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
         * instructions to remove a reply keyboard or to force a reply from the user.
         * Not supported for messages sent on behalf of a business account.
         */
        protected InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null,
    ) {
    }
}
