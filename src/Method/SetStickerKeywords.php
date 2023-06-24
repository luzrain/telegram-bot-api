<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to change search keywords assigned to a regular or custom emoji sticker.
 * The sticker must belong to a sticker set created by the bot.
 * Returns True on success.
 *
 * @extends BaseMethod<true>
 */
final class SetStickerKeywords extends BaseMethod
{
    protected static string $methodName = 'setStickerKeywords';

    public function __construct(
        /**
         * File identifier of the sticker
         */
        protected string $sticker,

        /**
         * A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters
         *
         * @var list<string>|null
         */
        protected array|null $keywords = null,
    ) {
    }
}
