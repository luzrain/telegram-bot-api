<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

/**
 * A custom emoji.
 */
final readonly class RichTextCustomEmoji extends RichText
{
    public const TYPE = 'custom_emoji';

    public function __construct(
        /**
         * Unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker.
         */
        public string $customEmojiId,

        /**
         * Alternative emoji for the custom emoji
         */
        public string $alternativeText,
    ) {
        parent::__construct(self::TYPE);
    }
}
