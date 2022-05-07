<?php

namespace TelegramBot\Api\Events\Events;

use Closure;
use ReflectionFunction;
use TelegramBot\Api\Events\Event;
use TelegramBot\Api\Types\Update;

final class Command extends Event
{
    private const REGEXP = '/^(?:@\w+\s)?\/([^\s@]+)(@\S+)?\s?(.*)$/';

    private string $command;

    public function __construct(string $command, Closure $action)
    {
        parent::__construct($action);
        $this->command = $command;
    }

    public function executeChecker(Update $update): bool
    {
        $message = $update->getMessage();
        if ($message === null || $message->getText() === '') {
            return false;
        }

        preg_match(self::REGEXP, $message->getText(), $matches);

        return !empty($matches) && $matches[1] == $this->command;
    }

    public function executeAction(Update $update): bool
    {
        $message = $update->getMessage();
        if (!$message) {
            return true;
        }

        preg_match(self::REGEXP, $message->getText(), $matches);

        if (isset($matches[3]) && !empty($matches[3])) {
            $parameters = str_getcsv($matches[3], chr(32));
        } else {
            $parameters = [];
        }

        array_unshift($parameters, $message);

        $action = new ReflectionFunction($this->getAction());

        if (count($parameters) >= $action->getNumberOfRequiredParameters()) {
            $action->invokeArgs($parameters);
        }

        return false;
    }
}
