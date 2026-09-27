<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;

/**
 * Represents a voice message file to be sent.
 */
final readonly class InputMediaVoiceNote extends Type
{
    public const TYPE = 'voice_note';

    /**
     * Type of the media, must be voice_note
     */
    public string $type;

    public function __construct(
        /**
         * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended),
         * pass an HTTP URL for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>"
         * to upload a new one using multipart/form-data under <file_attach_name> name.
         */
        public InputFile|string $media,

        /**
         * Optional. Caption of the voice message to be sent, 0-1024 characters after entities parsing
         */
        public string|null $caption = null,

        /**
         * Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
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
         * Optional. Duration of the voice message in seconds
         */
        public int|null $duration = null,
    ) {
        $this->type = self::TYPE;
    }
}
