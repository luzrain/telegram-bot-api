<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Method;

use Luzrain\TelegramBotApi\BaseMethod;
use Luzrain\TelegramBotApi\Type\WebhookInfo;

/**
 * Use this method to get current webhook status. Requires no parameters. On success, returns a WebhookInfo object.
 * If the bot is using getUpdates, will return an object with the url field empty.
 *
 * @extends BaseMethod<WebhookInfo>
 */
final class GetWebhookInfo extends BaseMethod
{
    protected static string $methodName = 'getWebhookInfo';
    protected static string $responseClass = WebhookInfo::class;

    public function __construct()
    {
    }
}
