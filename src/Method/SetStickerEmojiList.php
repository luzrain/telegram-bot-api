<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to change the list of emoji assigned to a regular or custom emoji sticker.
 * The sticker must belong to a sticker set created by the bot.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SetStickerEmojiList extends Method
{
    protected static string $methodName = 'setStickerEmojiList';

    public function __construct(
        /**
         * File identifier of the sticker
         */
        protected string $sticker,

        /**
         * A JSON-serialized list of 1-20 emoji associated with the sticker
         *
         * @var string[]
         */
        protected array $emojiList,
    ) {
    }
}
