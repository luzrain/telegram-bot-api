<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\ForceReply;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\ReplyKeyboardMarkup;
use TelegramBot\Api\Types\ReplyKeyboardRemove;

/**
 * Use this method to send point on the map. On success, the sent Message is returned.
 */
final class SendLocation extends BaseMethod
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
         * If the message is a reply, ID of the original message
         */
        protected int|null $replyToMessageId = null,

        /**
         * Pass True, if the message should be sent even if the specified replied-to message is not found
         */
        protected bool|null $allowSendingWithoutReply = null,

        /**
         * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard,
         * instructions to remove reply keyboard or to force a reply from the user.
         */
        protected InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $replyMarkup = null,
    ) {
    }
}
