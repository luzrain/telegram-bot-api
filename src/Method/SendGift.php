<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Sends a gift to the given user. The gift can't be converted to Telegram Stars by the user.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SendGift extends Method
{
    protected static string $methodName = 'sendGift';

    public function __construct(
        /**
         * Unique identifier of the target user that will receive the gift
         */
        protected int $userId,

        /**
         * Identifier of the gift
         */
        protected string $giftId,

        /**
         * Text that will be shown along with the gift; 0-255 characters
         */
        protected string|null $text = null,

        /**
         * Mode for parsing entities in the text. See formatting options for more details.
         * Entities other than "bold", "italic", "underline", "strikethrough", "spoiler", and "custom_emoji" are ignored.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
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
