<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\ChatMember;

/**
 * Use this method to get a list of administrators in a chat, which aren't bots.
 * Returns an Array of ChatMember objects.
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
         * Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
         */
        protected int|string $chatId,
    ) {
    }
}
