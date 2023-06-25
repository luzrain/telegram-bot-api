<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;

/**
 * This object represents a custom keyboard with reply options (see Introduction to bots for details and examples).
 */
final class ReplyKeyboardMarkup extends BaseType
{
    private const BREAK = 1;

    /**
     * Array of button rows, each represented by an Array of KeyboardButton objects
     */
    public array $keyboard;

    /**
     * Optional. Requests clients to always show the keyboard when the regular keyboard is hidden.
     * Defaults to false, in which case the custom keyboard can be hidden and opened with a keyboard icon.
     */
    public bool|null $isPersistent;

    /**
     * Optional. Requests clients to resize the keyboard vertically for optimal fit
     * (e.g., make the keyboard smaller if there are just two rows of buttons).
     * Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard.
     */
    public bool|null $resizeKeyboard;

    /**
     * Optional. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available,
     * but clients will automatically display the usual letter-keyboard in the chat – the user can press a special
     * button in the input field to see the custom keyboard again. Defaults to false.
     */
    public bool|null $oneTimeKeyboard;

    /**
     * Optional. The placeholder to be shown in the input field when the keyboard is active; 1-64 characters
     */
    public string|null $inputFieldPlaceholder;

    /**
     * Optional. Use this parameter if you want to show the keyboard to specific users only. Targets:
     * 1) users that are @mentioned in the text of the Message object,
     * 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     */
    public bool|null $selective;

    private function __construct()
    {
    }

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
