<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\InputRichMessage;

/**
 * Use this method to stream a partial rich message to a user while the message is being generated.
 * Note that the streamed draft is ephemeral and acts as a temporary 30-second preview - once the output is finalized,
 * you must call sendRichMessage with the complete message to persist it in the user's chat. Returns True on success.
 *
 * @extends Method<true>
 */
final class SendRichMessageDraft extends Method
{
    protected static string $methodName = 'sendRichMessageDraft';

    public function __construct(
        /**
         * Unique identifier for the target private chat
         */
        protected int $chatId,

        /**
         * Unique identifier of the message draft; must be non-zero. Changes to drafts with the same identifier are animated.
         */
        protected int $draftId,

        /**
         * The partial message to be streamed
         */
        protected InputRichMessage $richMessage,

        /**
         * Unique identifier for the target message thread
         */
        protected int|null $messageThreadId = null,
    ) {
    }
}
