<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to set a new group sticker set for a supergroup.
 * The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights.
 * Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SetChatStickerSet extends Method
{
    protected static string $methodName = 'setChatStickerSet';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
         */
        protected int|string $chatId,

        /**
         * Name of the sticker set to be set as the group sticker set
         */
        protected string $stickerSetName,
    ) {
    }
}
