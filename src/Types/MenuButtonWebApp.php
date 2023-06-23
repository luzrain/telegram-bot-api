<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

/**
 * Represents a menu button, which launches a Web App.
 */
final class MenuButtonWebApp extends MenuButton
{
    protected static array $requiredParams = [
        'type',
        'text',
        'web_app',
    ];

    protected static array $map = [
        'type' => true,
        'text' => true,
        'web_app' => WebAppInfo::class,
    ];

    /**
     * Type of the button, must be web_app
     */
    protected string $type = 'web_app';

    /**
     * Text on the button
     */
    protected string $text;

    /**
     * Description of the Web App that will be launched when the user presses the button.
     * The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery.
     */
    protected WebAppInfo $webApp;

    public static function create(string $text, WebAppInfo $webApp): self
    {
        $instance = new self();
        $instance->text = $text;
        $instance->webApp = $webApp;

        return $instance;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getWebApp(): WebAppInfo
    {
        return $this->webApp;
    }
}
