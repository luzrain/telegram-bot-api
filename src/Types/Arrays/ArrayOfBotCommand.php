<?php

namespace TelegramBot\Api\Types\Arrays;

use TelegramBot\Api\Types\BotCommand;

abstract class ArrayOfBotCommand
{
    public static function fromResponse($data)
    {
        $arrayOfBotCommand = [];
        foreach ($data as $botCommand) {
            $arrayOfBotCommand[] = BotCommand::fromResponse($botCommand);
        }

        return $arrayOfBotCommand;
    }
}
