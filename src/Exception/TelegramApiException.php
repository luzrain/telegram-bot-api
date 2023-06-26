<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Exception;

use Luzrain\TelegramBotApi\Type\ResponseParameters;

final class TelegramApiException extends \Exception
{
    private ResponseParameters|null $parameters;

    public function __construct(string $message, int $code, ResponseParameters $parameters = null)
    {
        $this->parameters = $parameters;

        parent::__construct($message, $code);
    }

    public function getParameters(): ResponseParameters|null
    {
        return $this->parameters;
    }
}
