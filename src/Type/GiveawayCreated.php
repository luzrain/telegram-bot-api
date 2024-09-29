<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a service message about the creation of a scheduled giveaway.
 */
final readonly class GiveawayCreated extends Type
{
    protected function __construct(
        /**
         * Optional. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only
         */
        public int|null $prizeStarCount = null,
    ) {
    }
}
