<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Exception;

use Luzrain\TelegramBotApi\Type\ResponseParameters;

final class TelegramApiException extends \Exception
{
    public function __construct(string $message, int $code, private readonly ResponseParameters|null $parameters = null)
    {
        parent::__construct($message, $code);
    }

    public function getParameters(): ResponseParameters|null
    {
        return $this->parameters;
    }
}
