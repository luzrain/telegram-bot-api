<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\MessageEntity;

/**
 * Use this method to stream a partial message to a user while the message is being generated; supported only for bots with forum topic mode enabled.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SendMessageDraft extends Method
{
    protected static string $methodName = 'sendMessageDraft';

    public function __construct(
        /**
         * Unique identifier for the target private chat
         */
        protected int $chatId,

        /**
         * Unique identifier of the message draft; must be non-zero. Changes of drafts with the same identifier are animated
         */
        protected int $draftId,

        /**
         * Text of the message to be sent, 1-4096 characters after entities parsing
         */
        protected string $text,

        /**
         * Unique identifier for the target message thread
         */
        protected int|null $messageThreadId = null,

        /**
         * Mode for parsing entities in the message text. See formatting options for more details.
         *
         * @see https://core.telegram.org/bots/api#formatting-options
         */
        protected string|null $parseMode = null,

        /**
         * A JSON-serialized list of special entities that appear in message text, which can be specified instead of parse_mode
         *
         * @var list<MessageEntity>|null
         */
        protected array|null $entities = null,
    ) {
    }
}
