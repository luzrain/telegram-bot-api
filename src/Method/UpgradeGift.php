<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Upgrades a given regular gift to a unique gift. Requires the can_transfer_and_upgrade_gifts business bot right. Additionally requires the can_transfer_stars business bot right if the upgrade is paid.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class UpgradeGift extends Method
{
    protected static string $methodName = 'upgradeGift';

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * Unique identifier of the regular gift that should be upgraded to a unique one
         */
        protected string $ownedGiftId,

        /**
         * Pass True to keep the original gift text, sender and receiver in the upgraded gift
         */
        protected bool|null $keepOriginalDetails = null,

        /**
         * The amount of Telegram Stars that will be paid for the upgrade from the business account balance.
         * If gift.prepaid_upgrade_star_count > 0, then pass 0, otherwise, the can_transfer_stars business bot right is required and gift.upgrade_star_count must be passed.
         */
        protected int|null $starCount = null,
    ) {
    }
}
