<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Changes the emoji status for a given user that previously allowed the bot to manage their emoji status via the Mini
 * App method requestEmojiStatusAccess.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SetUserEmojiStatus extends Method
{
    protected static string $methodName = 'setUserEmojiStatus';

    public function __construct(
        /**
         * Unique identifier of the target user
         */
        protected int $userId,

        /**
         * Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status.
         */
        protected string|null $emojiStatusCustomEmojiId = null,

        /**
         * Expiration date of the emoji status, if any
         */
        protected int|null $emojiStatusExpirationDate = null,
    ) {
    }
}
