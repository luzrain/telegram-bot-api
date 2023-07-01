<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

/**
 * Represents a menu button, which launches a Web App.
 */
final readonly class MenuButtonWebApp extends MenuButton
{
    public function __construct(
        /**
         * Text on the button
         */
        public string $text,

        /**
         * Description of the Web App that will be launched when the user presses the button.
         * The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery.
         */
        public WebAppInfo $webApp,
    ) {
        parent::__construct('web_app');
    }
}
