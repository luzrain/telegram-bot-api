<?php
/**
 * User: boshurik
 * Date: 10.06.2020
 * Time: 19:54
 */

namespace TelegramBot\Api\Test;

use PHPUnit\Framework\TestCase;
use TelegramBot\Api\Types\WebhookInfo;

class WebhookInfoTest extends TestCase
{
    public function testFromResponse()
    {
        $webhookInfo = WebhookInfo::fromResponse(array(
            'url' => '',
            'has_custom_certificate' => false,
            'pending_update_count' => 0,
            'last_error_date' => null,
            'last_error_message' => null,
            'max_connections' => 40,
            'allowed_updates' => null
        ));

        $this->assertInstanceOf(WebhookInfo::class, $webhookInfo);
        $this->assertSame('', $webhookInfo->getUrl());
        $this->assertFalse($webhookInfo->hasCustomCertificate());
        $this->assertSame(0, $webhookInfo->getPendingUpdateCount());
        $this->assertNull($webhookInfo->getLastErrorDate());
        $this->assertNull($webhookInfo->getLastErrorMessage());
        $this->assertSame(40, $webhookInfo->getMaxConnections());
        $this->assertNull($webhookInfo->getAllowedUpdates());
    }
}
