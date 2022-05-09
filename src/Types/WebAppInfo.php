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

    /**
     * Create new instance of WebAppInfo
     */
    public static function create(string $url)
    {
        return new self(['url' => $url]);
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
