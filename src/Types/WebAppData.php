<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * Contains data sent from a Web App to the bot.
 */
class WebAppData extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [
        'data',
        'button_text',
    ];

    protected static array $map = [
        'data' => true,
        'button_text' => true,
    ];

    /**
     * The data. Be aware that a bad client can send arbitrary data in this field.
     */
    protected string $data;

    /**
     * Text of the web_app keyboard button, from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
     */
    protected string $buttonText;

    public function getData(): string
    {
        return $this->data;
    }

    public function getButtonText(): string
    {
        return $this->buttonText;
    }
}
