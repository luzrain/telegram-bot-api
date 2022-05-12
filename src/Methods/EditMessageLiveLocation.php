<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\InlineKeyboardMarkup;
use TelegramBot\Api\Types\Message;

/**
 * Use this method to edit live location messages. A location can be edited until its live_period expires or editing
 * is explicitly disabled by a call to stopMessageLiveLocation.
 * On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 */
final class EditMessageLiveLocation extends BaseMethod
{
    protected static string $methodName = 'editMessageLiveLocation';
    protected static string $responseClass = Message::class;

    public function __construct(

        /**
         * Latitude of new location
         */
        protected float $latitude,

        /**
         * Longitude of new location
         */
        protected float $longitude,

        /**
         * Required if inline_message_id is not specified.
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string|null $chatId = null,

        /**
         * Required if inline_message_id is not specified. Identifier of the message to edit
         */
        protected int|null $messageId = null,

        /**
         * Required if chat_id and message_id are not specified. Identifier of the inline message
         */
        protected string|null $inlineMessageId = null,

        /**
         * The radius of uncertainty for the location, measured in meters; 0-1500
         */
        protected float|null $horizontalAccuracy = null,

        /**
         * Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
         */
        protected int|null $heading = null,

        /**
         * Maximum distance for proximity alerts about approaching another chat member, in meters.
         * Must be between 1 and 100000 if specified.
         */
        protected int|null $proximityAlertRadius = null,

        /**
         * A JSON-serialized object for a new inline keyboard.
         */
        protected InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
    }
}
