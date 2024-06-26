<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to move a sticker in a set created by the bot to a specific position.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SetStickerPositionInSet extends Method
{
    protected static string $methodName = 'setStickerPositionInSet';

    public function __construct(
        /**
         * File identifier of the sticker
         */
        protected string $sticker,

        /**
         * New sticker position in the set, zero-based
         */
        protected int $position,
    ) {
    }
}
