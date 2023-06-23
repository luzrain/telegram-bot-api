<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\TypeInterface;

/**
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 */
final class MessageEntity extends BaseType implements TypeInterface
{
    public const TYPE_MENTION = 'mention';
    public const TYPE_HASHTAG = 'hashtag';
    public const TYPE_CASHTAG = 'cashtag';
    public const TYPE_BOT_COMMAND = 'bot_command';
    public const TYPE_URL = 'url';
    public const TYPE_EMAIL = 'email';
    public const TYPE_PHONE_NUMBER = 'phone_number';
    public const TYPE_BOLD = 'bold';
    public const TYPE_ITALIC = 'italic';
    public const TYPE_UNDERLINE = 'underline';
    public const TYPE_STRIKETHROUGH = 'strikethrough';
    public const TYPE_SPOILER = 'spoiler';
    public const TYPE_CODE = 'code';
    public const TYPE_PRE = 'pre';
    public const TYPE_TEXT_LINK = 'text_link';
    public const TYPE_TEXT_MENTION = 'text_mention';
    public const CUSTOM_EMOJI = 'custom_emoji';

    protected static array $requiredParams = [
        'type',
        'offset',
        'length',
    ];

    protected static array $map = [
        'type' => true,
        'offset' => true,
        'length' => true,
        'url' => true,
        'user' => User::class,
        'language' => true,
        'custom_emoji_id' => true,
    ];

    /**
     * Type of the entity.
     * Currently, can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD), “bot_command” (/start@jobs_bot),
     * “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text),
     * “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message),
     * “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames),
     * “custom_emoji” (for inline custom emoji stickers)
     */
    protected string $type;

    /**
     * Offset in UTF-16 code units to the start of the entity
     */
    protected int $offset;

    /**
     * Length of the entity in UTF-16 code units
     */
    protected int $length;

    /**
     * Optional. For “text_link” only, url that will be opened after user taps on the text
     */
    protected ?string $url = null;

    /**
     * Optional. For “text_mention” only, the mentioned user
     */
    protected ?User $user = null;

    /**
     * Optional. For “pre” only, the programming language of the entity text
     */
    protected ?string $language = null;

    /**
     * Optional. For “custom_emoji” only, unique identifier of the custom emoji.
     * Use getCustomEmojiStickers to get full information about the sticker
     */
    protected ?string $customEmojiId = null;

    public static function create(
        string $type,
        int $offset,
        int $length,
        ?string $url = null,
        ?User $user = null,
        ?string $language = null,
    ): self {
        $instance = new self();
        $instance->type = $type;
        $instance->offset = $offset;
        $instance->length = $length;
        $instance->url = $url;
        $instance->user = $user;
        $instance->language = $language;

        return $instance;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function getCustomEmojiId(): ?string
    {
        return $this->customEmojiId;
    }
}
