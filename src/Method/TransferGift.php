<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Transfers an owned unique gift to another user. Requires the can_transfer_and_upgrade_gifts business bot right. Requires can_transfer_stars business bot right if the transfer is paid.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class TransferGift extends Method
{
    protected static string $methodName = 'transferGift';

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * Unique identifier of the regular gift that should be transferred
         */
        protected string $ownedGiftId,

        /**
         * Unique identifier of the chat which will own the gift. The chat must be active in the last 24 hours.
         */
        protected int $newOwnerChatId,

        /**
         * The amount of Telegram Stars that will be paid for the transfer from the business account balance.
         * If positive, then the can_transfer_stars business bot right is required.
         */
        protected int|null $starCount = null,
    ) {
    }
}
