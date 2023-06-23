<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Test\Helper;

final class ClosureTestHelper
{
    private \Closure $closure;
    private bool $isCalled = false;
    private mixed $parameter = null;

    public function __construct()
    {
        $this->closure = function (mixed $parameter) {
            $this->isCalled = true;
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
        return $this->isCalled;
    }

    public function getParameter(): mixed
    {
        return $this->parameter;
    }
}
