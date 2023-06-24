<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Type\InputSticker;

/**
 * Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created.
 * Returns True on success.
 *
 * @extends BaseMethod<true>
 */
final class CreateNewStickerSet extends BaseMethod
{
    protected static string $methodName = 'createNewStickerSet';

    public function __construct(
        /**
         * User identifier of created sticker set owner
         */
        protected int $userId,

        /**
         * Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g., animals).
         * Can contain only english letters, digits and underscores. Must begin with a letter,
         * can't contain consecutive underscores and must end in "_by_<bot_username>". <bot_username> is case insensitive. 1-64 characters.
         */
        protected string $name,

        /**
         * Sticker set title, 1-64 characters
         */
        protected string $title,

        /**
         * A JSON-serialized list of 1-50 initial stickers to be added to the sticker set
         *
         * @var InputSticker[]
         */
        protected array $stickers,

        /**
         * Format of stickers in the set, must be one of “static”, “animated”, “video”
         */
        protected string $stickerFormat,

        /**
         * Type of stickers in the set, pass “regular”, “mask”, or “custom_emoji”. By default, a regular sticker set is created.
         */
        protected string|null $stickerType = null,

        /**
         * Pass True if stickers in the sticker set must be repainted to the color of text when used in messages, the accent color
         * if used as emoji status, white on chat photos, or another appropriate color based on context; for custom emoji sticker sets only
         */
        protected bool|null $needsRepainting = null,
    ) {
    }
}
