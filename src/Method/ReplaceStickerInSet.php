<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\InputSticker;

/**
 * Use this method to replace an existing sticker in a sticker set with a new one.
 * The method is equivalent to calling deleteStickerFromSet, then addStickerToSet, then setStickerPositionInSet.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class ReplaceStickerInSet extends Method
{
    protected static string $methodName = 'replaceStickerInSet';

    public function __construct(
        /**
         * User identifier of the sticker set owner
         */
        protected int $userId,

        /**
         * Sticker set name
         */
        protected string $name,

        /**
         * File identifier of the replaced sticker
         */
        protected string $oldSticker,

        /**
         * A JSON-serialized object with information about the added sticker.
         * If exactly the same sticker had already been added to the set, then the set remains unchanged.
         */
        protected InputSticker $sticker,
    ) {
    }
}
