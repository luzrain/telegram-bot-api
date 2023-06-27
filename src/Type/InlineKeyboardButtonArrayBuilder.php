<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

final class InlineKeyboardButtonArrayBuilder
{
    private int $rowIndex = 0;
    private array $keyboard = [[]];

    private function __construct()
    {
    }

    public static function create(): self
    {
        return new self();
    }

    public function addButton(InlineKeyboardButton $button): self
    {
        $this->keyboard[$this->rowIndex][] = $button->toStdObject();

        return $this;
    }

    public function addBreak(): self
    {
        $this->rowIndex++;

        return $this;
    }

    public function toArray(): array
    {
        try {
            return $this->keyboard;
        } finally {
            $this->rowIndex = 0;
            $this->keyboard = [[]];
        }
    }
}
