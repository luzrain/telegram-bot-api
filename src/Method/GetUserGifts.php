<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\OwnedGifts;

/**
 * Returns the gifts owned and hosted by a user. Returns OwnedGifts on success.
 *
 * @extends Method<OwnedGifts>
 */
final class GetUserGifts extends Method
{
    protected static string $methodName = 'getUserGifts';
    protected static string $responseClass = OwnedGifts::class;

    public function __construct(
        /**
         * Unique identifier of the user
         */
        protected int $userId,

        /**
         * Pass True to exclude gifts that can be purchased an unlimited number of times
         */
        protected bool|null $excludeUnlimited = null,

        /**
         * Pass True to exclude gifts that can be purchased a limited number of times and can be upgraded to unique
         */
        protected bool|null $excludeLimitedUpgradable = null,

        /**
         * Pass True to exclude gifts that can be purchased a limited number of times and can't be upgraded to unique
         */
        protected bool|null $excludeLimitedNonUpgradable = null,

        /**
         * Pass True to exclude gifts that were assigned from the TON blockchain and can't be resold or transferred in Telegram
         */
        protected bool|null $excludeFromBlockchain = null,

        /**
         * Pass True to exclude unique gifts
         */
        protected bool|null $excludeUnique = null,

        /**
         * Pass True to sort results by gift price instead of send date. Sorting is applied before pagination.
         */
        protected bool|null $sortByPrice = null,

        /**
         * Offset of the first entry to return as received from the previous request; use an empty string to get the first chunk of results
         */
        protected string|null $offset = null,

        /**
         * The maximum number of gifts to be returned; 1-100. Defaults to 100
         */
        protected int|null $limit = null,
    ) {
    }
}
