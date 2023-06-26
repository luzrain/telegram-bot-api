<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to delete a sticker from a set created by the bot.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class DeleteStickerFromSet extends Method
{
    protected static string $methodName = 'deleteStickerFromSet';

    public function __construct(
        /**
         * File identifier of the sticker
         */
        protected string $sticker,
    ) {
    }
}
