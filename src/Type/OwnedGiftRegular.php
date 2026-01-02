<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type\Stickers\Gift;

/**
 * Describes a regular gift owned by a user or a chat.
 */
final readonly class OwnedGiftRegular extends OwnedGift
{
    public const TYPE = 'regular';

    protected function __construct(
        /**
         * Information about the regular gift
         */
        public Gift $gift,

        /**
         * Date the gift was sent in Unix time
         */
        public int $sendDate,

        /**
         * Optional. Unique identifier of the gift for the bot; for gifts received on behalf of business accounts only
         */
        public string|null $ownedGiftId = null,

        /**
         * Optional. Sender of the gift if it is a known user
         */
        public User|null $senderUser = null,

        /**
         * Optional. Text of the message that was added to the gift
         */
        public string|null $text = null,

        /**
         * Optional. Special entities that appear in the text
         *
         * @var list<MessageEntity>|null
         */
        #[ArrayType(MessageEntity::class)]
        public array|null $entities = null,

        /**
         * Optional. True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them
         */
        public true|null $isPrivate = null,

        /**
         * Optional. True, if the gift is displayed on the account's profile page; for gifts received on behalf of business accounts only
         */
        public true|null $isSaved = null,

        /**
         * Optional. True, if the gift can be upgraded to a unique gift; for gifts received on behalf of business accounts only
         */
        public true|null $canBeUpgraded = null,

        /**
         * Optional. True, if the gift was refunded and isn't available anymore
         */
        public true|null $wasRefunded = null,

        /**
         * Optional. Number of Telegram Stars that can be claimed by the receiver instead of the gift; omitted if the gift cannot be converted to Telegram Stars
         */
        public int|null $convertStarCount = null,

        /**
         * Optional. Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift
         */
        public int|null $prepaidUpgradeStarCount = null,

        /**
         * Optional. True, if the gift's upgrade was purchased after the gift was sent; for gifts received on behalf of business accounts only
         */
        public true|null $isUpgradeSeparate = null,

        /**
         * Optional. Unique number reserved for this gift when upgraded. See the number field in UniqueGift
         */
        public int|null $uniqueGiftNumber = null,
    ) {
        parent::__construct(self::TYPE);
    }
}
