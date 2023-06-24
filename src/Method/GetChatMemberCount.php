<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method to get the number of members in a chat.
 * Returns Int on success.
 *
 * @extends BaseMethod<int>
 */
final class GetChatMemberCount extends BaseMethod
{
    protected static string $methodName = 'getChatMemberCount';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
         */
        protected int|string $chatId,
    ) {
    }
}
