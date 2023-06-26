<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to delete a sticker set that was created by the bot.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class DeleteStickerSet extends Method
{
    protected static string $methodName = 'deleteStickerSet';

    public function __construct(
        /**
         * Sticker set name
         */
        protected string $name,
    ) {
    }
}
