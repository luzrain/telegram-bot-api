<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Games\Game;
use Luzrain\TelegramBotApi\Type\Payments\Invoice;
use Luzrain\TelegramBotApi\Type\Stickers\Sticker;

/**
 * This object contains information about a message that is being replied to, which may come from another chat or forum topic.
 */
final readonly class ExternalReplyInfo extends Type
{
    public function __construct(
        /**
         * Origin of the message replied to by the given message
         */
        public MessageOrigin $origin,

        /**
         * Optional. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.
         */
        public Chat|null $chat = null,

        /**
         * Optional. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.
         */
        public int|null $messageId = null,

        /**
         * Optional. Options used for link preview generation for the original message, if it is a text message
         */
        public LinkPreviewOptions|null $linkPreviewOptions = null,

        /**
         * Optional. Message is an animation, information about the animation
         */
        public Animation|null $animation = null,

        /**
         * Optional. Message is an audio file, information about the file
         */
        public Audio|null $audio = null,

        /**
         * Optional. Message is a general file, information about the file
         */
        public Document|null $document = null,

        /**
         * Optional. Message is a photo, available sizes of the photo
         *
         * @var list<PhotoSize>|null
         */
        #[ArrayType(PhotoSize::class)]
        public array|null $photo = null,

        /**
         * Optional. Message is a sticker, information about the sticker
         */
        public Sticker|null $sticker = null,

        /**
         * Optional. Message is a forwarded story
         */
        public Story|null $story = null,

        /**
         * Optional. Message is a video, information about the video
         */
        public Video|null $video = null,

        /**
         * Optional. Message is a video note, information about the video message
         */
        public VideoNote|null $videoNote = null,

        /**
         * Optional. Message is a voice message, information about the file
         */
        public Voice|null $voice = null,

        /**
         * Optional. True, if the message media is covered by a spoiler animation
         */
        public true|null $hasMediaSpoiler = null,

        /**
         * Optional. Message is a shared contact, information about the contact
         */
        public Contact|null $contact = null,

        /**
         * Optional. Message is a dice with random value
         */
        public Dice|null $dice = null,

        /**
         * Optional. Message is a game, information about the game.
         *
         * @llink https://core.telegram.org/bots/api#games
         */
        public Game|null $game = null,

        /**
         * Optional. Message is a scheduled giveaway, information about the giveaway
         */
        public Giveaway|null $giveaway = null,

        /**
         * Optional. A giveaway with public winners was completed
         */
        public GiveawayWinners|null $giveawayWinners = null,

        /**
         * Optional. Message is an invoice for a payment, information about the invoice.
         *
         * @link https://core.telegram.org/bots/api#payments
         */
        public Invoice|null $invoice = null,

        /**
         * Optional. Message is a shared location, information about the location
         */
        public Location|null $location = null,

        /**
         * Optional. Message is a native poll, information about the poll
         */
        public Poll|null $poll = null,

        /**
         * Optional. Message is a venue, information about the venue
         */
        public Venue|null $venue = null,
    ) {
    }
}
