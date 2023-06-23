<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents type of a poll, which is allowed to be created and sent when the corresponding button is pressed.
 */
final class KeyboardButtonPollType extends BaseType implements TypeInterface
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

    public static function create(): self
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
