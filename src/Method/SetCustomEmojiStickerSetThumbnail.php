<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to set the thumbnail of a custom emoji sticker set.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SetCustomEmojiStickerSetThumbnail extends Method
{
    protected static string $methodName = 'setCustomEmojiStickerSetThumbnail';

    public function __construct(
        /**
         * Sticker set name
         */
        protected string $name,

        /**
         * Custom emoji identifier of a sticker from the sticker set;
         * pass an empty string to drop the thumbnail and use the first sticker as the thumbnail.
         */
        protected string|null $customEmojiId = null,
    ) {
    }
}
