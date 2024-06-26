<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;

/**
 * Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked.
 * The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights.
 * Returns the new invite link as String on success.
 *
 * @extends Method<string>
 */
final class ExportChatInviteLink extends Method
{
    protected static string $methodName = 'exportChatInviteLink';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,
    ) {
    }
}
