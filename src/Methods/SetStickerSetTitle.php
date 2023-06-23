<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Methods;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to set the title of a created sticker set.
 * Returns True on success.
 */
final class SetStickerSetTitle extends BaseMethod
{
    protected static string $methodName = 'setStickerSetTitle';

    public function __construct(

        /**
         * Sticker set name
         */
        protected string $name,

        /**
         * Sticker set title, 1-64 characters
         */
        protected string $title,
    ) {
    }
}
