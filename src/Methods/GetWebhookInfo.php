<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BaseMethod;
use TelegramBot\Api\Types\WebhookInfo;

/**
 * Use this method to get current webhook status. Requires no parameters. On success, returns a WebhookInfo object.
 * If the bot is using getUpdates, will return an object with the url field empty.
 */
final class GetWebhookInfo extends BaseMethod
{
    protected static string $methodName = 'getWebhookInfo';
    protected static string $responseClass = WebhookInfo::class;
}
