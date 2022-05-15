<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\ForceReply;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\ReplyKeyboardMarkup;
use TelegramBot\Api\Types\ReplyKeyboardRemove;

/**
 * Use this method to send information about a venue. On success, the sent Message is returned.
 */
final class SendVenue extends BaseMethod
{
    protected static string $methodName = 'sendVenue';
    protected static string $responseClass = Message::class;

    public function __construct(

        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Latitude of the venue
         */
        protected float $latitude,

        /**
         * Longitude of the venue
         */
        protected float $longitude,

        /**
         * Name of the venue
         */
        protected string $title,

        /**
         * Address of the venue
         */
        protected string $address,

        /**
         * Foursquare identifier of the venue
         */
        protected string|null $foursquareId = null,

        /**
         * Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
         */
        protected string|null $foursquareType = null,

        /**
         * Google Places identifier of the venue
         */
        protected string|null $googlePlaceId = null,

        /**
         * Google Places type of the venue. (See supported types.)
         */
        protected string|null $googlePlaceType = null,

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
