<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Exception;

use Luzrain\TelegramBotApi\Method;

final class TelegramCallbackException extends \Exception
{
    public function __construct(string $type)
    {
        parent::__construct(sprintf('Callback should return instance of %s or null, %s returned', Method::class, $type));
    }
}
