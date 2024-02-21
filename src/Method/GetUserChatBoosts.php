<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\UserChatBoosts;

/**
 * Use this method to get the list of boosts added to a chat by a user. Requires administrator rights in the chat.
 * Returns a UserChatBoosts object.
 *
 * @extends Method<UserChatBoosts>
 */
final class GetUserChatBoosts extends Method
{
    protected static string $methodName = 'getUserChatBoosts';
    protected static string $responseClass = UserChatBoosts::class;

    public function __construct(
        /**
         * Unique identifier for the chat or username of the channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Unique identifier of the target user
         */
        protected int $userId,
    ) {
    }
}
