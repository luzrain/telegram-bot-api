<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to delete a sticker from a set created by the bot. Returns True on success.
 */
final class DeleteStickerFromSet extends BaseMethod
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
