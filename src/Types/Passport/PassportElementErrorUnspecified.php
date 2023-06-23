<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types\Passport;

/**
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 */
final class PassportElementErrorUnspecified extends PassportElementError
{
    protected static array $map = [
        'source' => true,
        'type' => true,
        'element_hash' => true,
        'message' => true,
    ];

    public static function create(
        string $type,
        string $elementHash,
        string $message,
    ): self {
        $instance = new self();
        $instance->type = $type;
        $instance->elementHash = $elementHash;
        $instance->message = $message;

        return $instance;
    }

    /**
     * Error source, must be unspecified
     */
    protected string $source = 'unspecified';

    /**
     * Type of element of the user's Telegram Passport which has the issue
     */
    protected string $type;

    /**
     * Base64-encoded element hash
     */
    protected string $elementHash;

    /**
     * Error message
     */
    protected string $message;

    public function getSource(): string
    {
        return $this->source;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getElementHash(): string
    {
        return $this->elementHash;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
