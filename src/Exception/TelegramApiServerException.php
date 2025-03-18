<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Exception;

use Psr\Http\Client\ClientExceptionInterface;

final class TelegramApiServerException extends \Exception implements ClientExceptionInterface
{
}
