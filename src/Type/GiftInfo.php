<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Internal\ArrayType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\Type\Stickers\Gift;

/**
 * Describes a service message about a regular gift that was sent or received.
 */
final readonly class GiftInfo extends Type
{
    public function __construct(
        /**
         * Information about the gift
         */
        public Gift $gift,

        /**
         * Optional. Unique identifier of the received gift for the bot; only present for gifts received on behalf of business accounts
         */
        public string|null $ownedGiftId = null,

        /**
         * Optional. Number of Telegram Stars that can be claimed by the receiver by converting the gift; omitted if conversion to Telegram Stars is impossible
         */
        public int|null $convertStarCount = null,

        /**
         * Optional. Number of Telegram Stars that were prepaid by the sender for the ability to upgrade the gift
         */
        public int|null $prepaidUpgradeStarCount = null,

        /**
         * Optional. True, if the gift can be upgraded to a unique gift
         */
        public true|null $canBeUpgraded = null,

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
    ) {
    }
}
