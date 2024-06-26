<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\Method;
use Luzrain\TelegramBotApi\Type\Update;

/**
 * Use this method to receive incoming updates using long polling (wiki).
 * An Array of Update objects is returned.
 *
 * @extends Method<list<Update>>
 */
final class GetUpdates extends Method
{
    protected static string $methodName = 'getUpdates';
    protected static string $responseClass = Update::class;
    protected static bool $isArrayOfResponse = true;

    public function __construct(
        /**
         * Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of
         * previously received updates. By default, updates starting with the earliest unconfirmed update are returned.
         * An update is considered confirmed as soon as getUpdates is called with an offset higher than its update_id.
         * The negative offset can be specified to retrieve updates starting from -offset update from the end of the updates queue.
         * All previous updates will forgotten.
         */
        protected int|null $offset = null,

        /**
         * Limits the number of updates to be retrieved. Values between 1-100 are accepted. Defaults to 100.
         */
        protected int|null $limit = null,

        /**
         * Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling.
         * Should be positive, short polling should be used for testing purposes only.
         */
        protected int|null $timeout = null,

        /**
         * A JSON-serialized list of the update types you want your bot to receive.
         * For example, specify ["message", "edited_channel_post", "callback_query"] to only receive updates of these types.
         * See Update for a complete list of available update types. Specify an empty list to receive all update types except
         * chat_member (default). If not specified, the previous setting will be used.
         *
         * @var list<string>|null
         */
        protected array|null $allowedUpdates = null,
    ) {
    }
}
