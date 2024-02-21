<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\ReactionType;

/**
 * Use this method to change the chosen reactions on a message.
 * Service messages can't be reacted to. Automatically forwarded messages from a channel to its discussion group
 * have the same available reactions as messages in the channel.
 * Returns True on success.
 *
 * @extends Method<true>
 */
final class SetMessageReaction extends Method
{
    protected static string $methodName = 'setMessageReaction';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format @channelusername)
         */
        protected int|string $chatId,

        /**
         * Identifier of the target message. If the message belongs to a media group,
         * the reaction is set to the first non-deleted message in the group instead.
         */
        protected int $messageId,

        /**
         * New list of reaction types to set on the message.
         * Currently, as non-premium users, bots can set up to one reaction per message.
         * A custom emoji reaction can be used if it is either already present on the message or explicitly allowed by chat administrators.
         *
         * @var null|list<ReactionType>
         */
        protected array|null $reaction = null,

        /**
         * Pass True to set the reaction with a big animation
         */
        protected bool|null $isBig = null,
    ) {
    }
}
