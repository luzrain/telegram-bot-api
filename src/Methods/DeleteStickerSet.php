<?php

declare(strict_types=1);

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;

/**
 * Use this method to delete a sticker set that was created by the bot.
 * Returns True on success.
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
