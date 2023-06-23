<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a service message about a user allowing a bot to write messages after adding
 * the bot to the attachment menuor launching a Web App from a link.
 */
class WriteAccessAllowed extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [];

    protected static array $map = [
        'web_app_name' => true,
    ];

    /**
     * Optional. Name of the Web App which was launched from a link
     */
    protected ?string $webAppName = null;

    public function getWebAppName(): ?string
    {
        return $this->webAppName;
    }
}
