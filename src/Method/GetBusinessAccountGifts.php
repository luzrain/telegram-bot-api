<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\OwnedGifts;

/**
 * Returns the gifts received and owned by a managed business account. Requires the can_view_gifts_and_stars business bot right.
 * Returns OwnedGifts on success.
 *
 * @extends Method<OwnedGifts>
 */
final class GetBusinessAccountGifts extends Method
{
    protected static string $methodName = 'getBusinessAccountGifts';
    protected static string $responseClass = OwnedGifts::class;

    public function __construct(
        /**
         * Unique identifier of the business connection
         */
        protected string $businessConnectionId,

        /**
         * Pass True to exclude gifts that aren't saved to the account's profile page
         */
        protected bool|null $excludeUnsaved = null,

        /**
         * Pass True to exclude gifts that are saved to the account's profile page
         */
        protected bool|null $excludeSaved = null,

        /**
         * Pass True to exclude gifts that can be purchased an unlimited number of times
         */
        protected bool|null $excludeUnlimited = null,

        /**
         * Pass True to exclude gifts that can be purchased a limited number of times
         */
        protected bool|null $excludeLimited = null,

        /**
         * Pass True to exclude unique gifts
         */
        protected bool|null $excludeUnique = null,

        /**
         * Pass True to sort results by gift price instead of send date. Sorting is applied before pagination.
         */
        protected bool|null $sortByPrice = null,

        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results
         */
        protected string|null $offset = null,

        /**
         * The maximum number of gifts to be returned; 1-100. Defaults to 100
         */
        protected int|null $limit = null,
    ) {
    }
}
