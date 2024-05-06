<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\ChatFullInfo;

/**
 * Use this method to get up-to-date information about the chat.
 * Returns a ChatFullInfo object on success.
 *
 * @extends Method<ChatFullInfo>
 */
final class GetChat extends Method
{
    protected static string $methodName = 'getChat';
    protected static string $responseClass = ChatFullInfo::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
         */
        protected int|string $chatId,
    ) {
    }
}
