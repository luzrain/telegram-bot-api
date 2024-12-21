<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 */
final readonly class MessageEntity extends Type
{
    public const MENTION = 'mention'; // @username
    public const HASHTAG = 'hashtag'; // #hashtag
    public const CASHTAG = 'cashtag'; // $USD
    public const BOT_COMMAND = 'bot_command'; // /start@jobs_bot
    public const URL = 'url'; // https://telegram.org
    public const EMAIL = 'email'; // do-not-reply@telegram.org
    public const PHONE_NUMBER = 'phone_number'; // +1-212-555-0123
    public const BOLD = 'bold'; // bold text
    public const ITALIC = 'italic'; // italic text
    public const UNDERLINE = 'underline'; // underlined text
    public const STRIKETHROUGH = 'strikethrough'; // strikethrough text
    public const SPOILER = 'spoiler'; // spoiler message
    public const BLOCKQUOTE = 'blockquote'; // block quotation
    public const EXPANDABLE_BLOCKQUOTE = 'expandable_blockquote'; // block quotation
    public const CODE = 'code'; // monowidth string
    public const PRE = 'pre'; // monowidth block
    public const TEXT_LINK = 'text_link'; // for clickable text URLs
    public const TEXT_MENTION = 'text_mention'; // for users without usernames
    public const CUSTOM_EMOJI = 'custom_emoji'; // for inline custom emoji stickers

    public function __construct(
        /**
         * Type of the entity
         */
        public string $type,

        /**
         * Offset in UTF-16 code units to the start of the entity
         */
        public int $offset,

        /**
         * Length of the entity in UTF-16 code units
         */
        public int $length,

        /**
         * Optional. For "text_link" only, url that will be opened after user taps on the text
         */
        public string|null $url = null,

        /**
         * Optional. For "text_mention" only, the mentioned user
         */
        public User|null $user = null,

        /**
         * Optional. For "pre" only, the programming language of the entity text
         */
        public string|null $language = null,

        /**
         * Optional. For "custom_emoji" only, unique identifier of the custom emoji.
         * Use getCustomEmojiStickers to get full information about the sticker
         */
        public string|null $customEmojiId = null,
    ) {
    }
}
