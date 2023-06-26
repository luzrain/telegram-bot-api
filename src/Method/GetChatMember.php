<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\ChatMember;

/**
 * Use this method to get information about a member of a chat.
 * Returns a ChatMember object on success.
 *
 * @extends Method<ChatMember>
 */
final class GetChatMember extends Method
{
    protected static string $methodName = 'getChatMember';
    protected static string $responseClass = ChatMember::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Unique identifier of the target user
         */
        protected int $userId,
    ) {
    }
}
