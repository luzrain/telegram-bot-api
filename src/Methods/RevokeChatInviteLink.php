<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Methods;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Types\ChatInviteLink;

/**
 * Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated.
 * The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights.
 * Returns the revoked invite link as ChatInviteLink object.
 */
final class RevokeChatInviteLink extends BaseMethod
{
    protected static string $methodName = 'revokeChatInviteLink';
    protected static string $responseClass = ChatInviteLink::class;

    public function __construct(

        /**
         * Unique identifier of the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * The invite link to revoke
         */
        protected string $inviteLink,
    ) {
    }
}
