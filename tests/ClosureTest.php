<?php

namespace TelegramBot\Api\Test;

use Closure;

class ClosureTest
{
    private Closure $closure;
    private mixed $parameter = null;

    public function __construct()
    {
        $this->closure = fn (mixed $parameter) => $this->parameter = $parameter;
    }

    public function getClosure(): Closure
    {
        return $this->closure;
    }

    public function isCalled(): bool
    {
        return $this->parameter !== null;
    }

    public function getParameter(): mixed
    {
        return $this->parameter;
    }
}
