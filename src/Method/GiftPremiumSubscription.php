<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Gifts a Telegram Premium subscription to the given user.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class GiftPremiumSubscription extends Method
{
    protected static string $methodName = 'giftPremiumSubscription';

    public function __construct(
        /**
         * Unique identifier of the target user who will receive a Telegram Premium subscription
         */
        protected int $userId,

        /**
         * Number of months the Telegram Premium subscription will be active for the user; must be one of 3, 6, or 12
         */
        protected int $monthCount,

        /**
         * Number of Telegram Stars to pay for the Telegram Premium subscription; must be 1000 for 3 months, 1500 for 6 months, and 2500 for 12 months
         */
        protected int $starCount,

        /**
         * Text that will be shown along with the service message about the subscription; 0-128 characters
         */
        protected string|null $text = null,

        /**
         * Mode for parsing entities in the text. See formatting options for more details.
         * Entities other than "bold", "italic", "underline", "strikethrough", "spoiler", and "custom_emoji" are ignored.
         */
        protected string|null $textParseMode = null,

        /**
         * A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of text_parse_mode.
         * Entities other than "bold", "italic", "underline", "strikethrough", "spoiler", and "custom_emoji" are ignored.
         *
         * @var list<MessageEntity>|null
         */
        protected array|null $textEntities = null,
    ) {
    }
}
