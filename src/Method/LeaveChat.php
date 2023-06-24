<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;

/**
 * Use this method for your bot to leave a group, supergroup or channel.
 * Returns True on success.
 *
 * @extends BaseMethod<true>
 */
final class LeaveChat extends BaseMethod
{
    protected static string $methodName = 'leaveChat';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or channel (in the format @channelusername)
         */
        protected int|string $chatId,
    ) {
    }
}
