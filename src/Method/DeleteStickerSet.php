<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to delete a sticker set that was created by the bot.
 * Returns True on success.
 *
 * @extends BaseMethod<true>
 */
final class DeleteStickerSet extends BaseMethod
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
