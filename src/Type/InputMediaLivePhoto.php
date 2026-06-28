<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;

/**
 * Represents a live photo to be sent.
 */
final readonly class InputMediaLivePhoto extends InputMedia implements InputPollMedia, InputPollOptionMedia
{
    public const TYPE = 'live_photo';

    public function __construct(
        /**
         * Video of the live photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended)
         * or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name.
         * Sending live photos by a URL is currently unsupported.
         */
        public InputFile|string $media,

        /**
         * The static photo to send. Pass a file_id to send a file that exists on the Telegram servers (recommended)
         * or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name.
         * Sending live photos by a URL is currently unsupported.
         */
        public InputFile|string $photo,

        /**
         * Optional. Caption of the live photo to be sent, 0-1024 characters after entities parsing
         */
        public string|null $caption = null,

        /**
         * Optional. Mode for parsing entities in the live photo caption. See formatting options for more details.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        public string|null $parseMode = null,

        /**
         * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $captionEntities = null,

        /**
         * Optional. Pass True, if the caption must be shown above the message media
         */
        public bool|null $showCaptionAboveMedia = null,

        /**
         * Optional. Pass True if the live photo needs to be covered with a spoiler animation
         */
        public bool|null $hasSpoiler = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
