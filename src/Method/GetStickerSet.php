<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Type\Stickers\StickerSet;

/**
 * Use this method to get a sticker set. On success, a StickerSet object is returned.
 */
final class GetStickerSet extends BaseMethod
{
    protected static string $methodName = 'getStickerSet';
    protected static string $responseClass = StickerSet::class;

    public function __construct(

        /**
         * Name of the sticker set
         */
        protected string $name,
    ) {
    }
}
