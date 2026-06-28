<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Stickers\Sticker;

/**
 * At most one of the optional fields can be present in any given object.
 */
final readonly class PollMedia extends Type
{
    protected function __construct(
        /**
         * Optional. Media is an animation, information about the animation
         */
        public Animation|null $animation = null,

        /**
         * Optional. Media is an audio file, information about the file; currently, can't be received in a poll option
         */
        public Audio|null $audio = null,

        /**
         * Optional. Media is a general file, information about the file; currently, can't be received in a poll option
         */
        public Document|null $document = null,

        /**
         * Optional. The HTTP link attached to the poll option
         */
        public Link|null $link = null,

        /**
         * Optional. Media is a live photo, information about the live photo
         */
        public LivePhoto|null $livePhoto = null,

        /**
         * Optional. Media is a shared location, information about the location
         */
        public Location|null $location = null,

        /**
         * Optional. Media is a photo, available sizes of the photo
         *
         * @var list<PhotoSize>|null
         */
        #[ArrayType(PhotoSize::class)]
        public array|null $photo = null,

        /**
         * Optional. Media is a sticker, information about the sticker; currently, for poll options only
         */
        public Sticker|null $sticker = null,

        /**
         * Optional. Media is a venue, information about the venue
         */
        public Venue|null $venue = null,

        /**
         * Optional. Media is a video, information about the video
         */
        public Video|null $video = null,
    ) {
    }
}
