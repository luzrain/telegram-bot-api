<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\ArrayType;
use Luzrain\TelegramBotApi\Type;
use Luzrain\TelegramBotApi\TypeDenormalizable;

/**
 * This object represents a list of boosts added to a chat by a user.
 */
final readonly class UserChatBoosts extends Type implements TypeDenormalizable
{
    public function __construct(
        /**
         * The list of boosts added to the chat by the user
         *
         * @var list<ChatBoost>
         */
        #[ArrayType(ChatBoost::class)]
        public array $boosts,
    ) {
    }
}
