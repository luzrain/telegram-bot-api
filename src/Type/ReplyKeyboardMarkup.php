<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents a custom keyboard with reply options (see Introduction to bots for details and examples).
 */
final class ReplyKeyboardMarkup extends BaseType implements TypeInterface
{
    private const BREAK = 1;

    protected static array $requiredParams = [
        'keyboard',
    ];

    protected static array $map = [
        'keyboard' => true,
        'is_persistent' => true,
        'resize_keyboard' => true,
        'one_time_keyboard' => true,
        'input_field_placeholder' => true,
        'selective' => true,
    ];

    /**
     * Array of button rows, each represented by an Array of KeyboardButton objects
     */
    protected array $keyboard;

    /**
     * Optional. Requests clients to always show the keyboard when the regular keyboard is hidden.
     * Defaults to false, in which case the custom keyboard can be hidden and opened with a keyboard icon.
     */
    protected bool|null $isPersistent = null;

    /**
     * Optional. Requests clients to resize the keyboard vertically for optimal fit
     * (e.g., make the keyboard smaller if there are just two rows of buttons).
     * Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard.
     */
    protected bool|null $resizeKeyboard = null;

    /**
     * Optional. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available,
     * but clients will automatically display the usual letter-keyboard in the chat – the user can press a special
     * button in the input field to see the custom keyboard again. Defaults to false.
     */
    protected bool|null $oneTimeKeyboard = null;

    /**
     * Optional. The placeholder to be shown in the input field when the keyboard is active; 1-64 characters
     */
    protected string|null $inputFieldPlaceholder = null;

    /**
     * Optional. Use this parameter if you want to show the keyboard to specific users only. Targets:
     * 1) users that are @mentioned in the text of the Message object;
     * 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     */
    protected bool|null $selective = null;

    /**
     * Create new instance of ReplyKeyboardMarkup
     */
    public static function create(
        bool|null $isPersistent = null,
        bool|null $resizeKeyboard = null,
        bool|null $oneTimeKeyboard = null,
        string|null $inputFieldPlaceholder = null,
        bool|null $selective = null,
    ): self {
        $instance = new self();
        $instance->isPersistent = $isPersistent;
        $instance->resizeKeyboard = $resizeKeyboard;
        $instance->oneTimeKeyboard = $oneTimeKeyboard;
        $instance->inputFieldPlaceholder = $inputFieldPlaceholder;
        $instance->selective = $selective;

        return $instance;
    }

    /**
     * Add buttons into markup
     */
    public function addButtons(KeyboardButton|int ...$arrayOfButtons): self
    {
        $rowIndex = 0;
        $this->keyboard = [$rowIndex => []];

        foreach ($arrayOfButtons as $button) {
            if ($button instanceof KeyboardButton) {
                $this->keyboard[$rowIndex][] = $button->toArray();
            } elseif ($button === self::BREAK) {
                $rowIndex++;
            }
        }

        return $this;
    }

    /**
     * Break buttons row to tne next row
     */
    public static function break(): int
    {
        return self::BREAK;
    }
}