<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;

/**
 * This object represents type of a poll, which is allowed to be created and sent when the corresponding button is pressed.
 */
class KeyboardButtonPollType extends BaseType implements TypeInterface
{
    protected static array $requiredParams = [];

    protected static array $map = [
        'type' => true,
    ];

    /**
     * Optional. If quiz is passed, the user will be allowed to create only polls in the quiz mode.
     * If regular is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
     */
    protected ?string $type = null;

    public static function create()
    {
        $instance = new self();
        $instance->type = '';
        
        return $instance;
    }

    public static function createQuiz()
    {
        $instance = new self();
        $instance->type = 'quiz';

        return $instance;
    }

    public static function createRegular()
    {
        $instance = new self();
        $instance->type = 'regular';

        return $instance;
    }

    public function getType(): ?string
    {
        return $this->type;
    }
}
