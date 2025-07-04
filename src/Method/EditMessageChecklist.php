<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;
use Luzrain\TelegramBotApi\Type\InputChecklist;
use Luzrain\TelegramBotApi\Type\Message;

/**
 * Use this method to edit a checklist on behalf of a connected business account.
 * On success, the edited Message is returned.
 *
 * @extends Method<Message>
 */
final class EditMessageChecklist extends Method
{
    protected static string $methodName = 'editMessageChecklist';
    protected static string $responseClass = Message::class;

    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will be sent
         */
        protected string $businessConnectionId,

        /**
         * Unique identifier for the target chat
         */
        protected int $chatId,

        /**
         * Unique identifier for the target message
         */
        protected int $messageId,

        /**
         * A JSON-serialized object for the new checklist
         */
        protected InputChecklist $checklist,

        /**
         * A JSON-serialized object for the new inline keyboard for the message
         */
        protected InlineKeyboardMarkup|null $replyMarkup = null,
    ) {
    }
}
