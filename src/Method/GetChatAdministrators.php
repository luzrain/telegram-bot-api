<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\ChatMember;

/**
 * Use this method to get a list of administrators in a chat. Returns an Array of ChatMember objects.
 *
 * @extends Method<list<ChatMember>>
 */
final class GetChatAdministrators extends Method
{
    protected static string $methodName = 'getChatAdministrators';
    protected static string $responseClass = ChatMember::class;
    protected static bool $isArrayOfResponse = true;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or channel in the format @username
         */
        protected int|string $chatId,

        /**
         * Pass True to additionally receive all bots that are administrators of the chat. By default, bots other than the current bot are omitted.
         */
        protected bool|null $returnBots = null,
    ) {
    }
}
