<?php

declare(strict_types=1);

namespace TelegramBot\Api\Test\Helper;

final class ClosureTestHelper
{
    private \Closure $closure;
    private mixed $parameter = null;

    public function __construct()
    {
        $this->closure = function (mixed $parameter) {
            $this->parameter = $parameter;
            return null;
        };
    }

    public function getClosure(): \Closure
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
