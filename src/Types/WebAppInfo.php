<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * Contains information about a Web App.
 */
class WebAppInfo extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'url',
    ];

    protected static array $map = [
        'url' => true,
    ];

    /**
     * An HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps
     */
    protected string $url;

    public function getUrl(): string
    {
        return $this->url;
    }
}
