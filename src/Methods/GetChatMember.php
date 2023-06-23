<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Methods;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Types\ChatMember;

/**
 * Use this method to get information about a member of a chat. Returns a ChatMember object on success.
 */
final class GetChatMember extends BaseMethod
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
