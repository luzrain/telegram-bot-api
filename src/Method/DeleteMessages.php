<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to delete multiple messages simultaneously.
 * If some of the specified messages can't be found, they are skipped.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class DeleteMessages extends Method
{
    protected static string $methodName = 'deleteMessages';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Identifiers of 1-100 messages to delete. See deleteMessage for limitations on which messages can be deleted
         *
         * @var list<int>
         */
        protected array $messageIds,
    ) {
    }
}
