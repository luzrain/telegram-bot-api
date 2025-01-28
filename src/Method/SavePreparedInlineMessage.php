<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Inline\InlineQueryResult;
use Luzrain\TelegramBotApi\Type\Inline\PreparedInlineMessage;

/**
 * Stores a message that can be sent by a user of a Mini App.
 * Returns a PreparedInlineMessage object.
 *
 * @extends Method<PreparedInlineMessage>
 */
final class SavePreparedInlineMessage extends Method
{
    protected static string $methodName = 'savePreparedInlineMessage';
    protected static string $responseClass = PreparedInlineMessage::class;

    public function __construct(
        /**
         * Unique identifier of the target user that can use the prepared message
         */
        protected int $userId,

        /**
         * A JSON-serialized object describing the message to be sent
         */
        protected InlineQueryResult $result,

        /**
         * Pass True if the message can be sent to private chats with users
         */
        protected bool|null $allowUserChats = null,

        /**
         * Pass True if the message can be sent to private chats with bots
         */
        protected bool|null $allowBotChats = null,

        /**
         * Pass True if the message can be sent to group and supergroup chats
         */
        protected bool|null $allowGroupChats = null,

        /**
         * Pass True if the message can be sent to channel chats
         */
        protected bool|null $allowChannelChats = null,
    ) {
    }
}
