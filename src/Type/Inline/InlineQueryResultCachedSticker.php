<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\Inline;

use Luzrain\TelegramBotApi\Type\InlineKeyboardMarkup;

/**
 * Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the sticker.
 */
final class InlineQueryResultCachedSticker extends InlineQueryResult
{
    protected static array $map = [
        'type' => true,
        'id' => true,
        'sticker_file_id' => true,
        'reply_markup' => InlineKeyboardMarkup::class,
        'input_message_content' => InputMessageContent::class,
    ];

    /**
     * Type of the result, must be sticker
     */
    protected string $type = 'sticker';

    /**
     * Unique identifier for this result, 1-64 bytes
     */
    protected string $id;

    /**
     * A valid file identifier of the sticker
     */
    protected string $stickerFileId;

    /**
     * Optional. Inline keyboard attached to the message
     */
    protected InlineKeyboardMarkup|null $replyMarkup = null;

    /**
     * Optional. Content of the message to be sent instead of the sticker
     */
    protected InputMessageContent|null $inputMessageContent = null;

    public static function create(
        string $id,
        string $stickerFileId,
        InlineKeyboardMarkup|null $replyMarkup = null,
        InputMessageContent|null $inputMessageContent = null,
    ): self {
        $instance = new self();
        $instance->id = $id;
        $instance->stickerFileId = $stickerFileId;
        $instance->replyMarkup = $replyMarkup;
        $instance->inputMessageContent = $inputMessageContent;

        return $instance;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getStickerFileId(): string
    {
        return $this->stickerFileId;
    }

    public function getReplyMarkup(): InlineKeyboardMarkup|null
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }
}