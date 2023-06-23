<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Methods;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to set the thumbnail of a custom emoji sticker set.
 * Returns True on success.
 */
final class SetCustomEmojiStickerSetThumbnail extends BaseMethod
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
