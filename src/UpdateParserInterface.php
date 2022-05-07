<?php

namespace TelegramBot\Api;

use Closure;

interface UpdateParserInterface
{
    public function getEvent(Closure $action): Closure;
    public function getChecker(): Closure;
}
