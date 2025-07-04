<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Describes a regular gift owned by a user or a chat.
 */
final readonly class OwnedGiftUnique extends OwnedGift
{
    public const TYPE = 'unique';

    protected function __construct(
        /**
         * Information about the unique gift
         */
        public UniqueGift $gift,

        /**
         * Date the gift was sent in Unix time
         */
        public int $sendDate,

        /**
         * Optional. Unique identifier of the received gift for the bot; for gifts received on behalf of business accounts only
         */
        public string|null $ownedGiftId = null,

        /**
         * Optional. Sender of the gift if it is a known user
         */
        public User|null $senderUser = null,

        /**
         * Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
         */
        public true|null $isSaved = null,

        /**
         * Optional. True, if the gift can be transferred to another owner; for gifts received on behalf of business accounts only
         */
        public true|null $canBeTransferred = null,

        /**
         * Optional. Number of Telegram Stars that must be paid to transfer the gift; omitted if the bot cannot transfer the gift
         */
        public int|null $transferStarCount = null,

        /**
         * Optional. Point in time (Unix timestamp) when the gift can be transferred. If it is in the past, then the gift can be transferred now
         */
        public int|null $nextTransferDate = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
