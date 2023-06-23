<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Types;

use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\Types\Stickers\MaskPosition;

/**
 * This object describes a sticker to be added to a sticker set.
 */
class InputSticker extends BaseType
{
    protected static array $map = [
        'sticker' => true,
        'emoji_list' => true,
        'mask_position' => true,
        'keywords' => true,
    ];

    /**
     * The added sticker. Pass a file_id as a String to send a file that already exists on the Telegram servers,
     * pass an HTTP URL as a String for Telegram to get a file from the Internet, upload a new one using multipart/form-data,
     * or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name.
     */
    protected InputFile|string $sticker;

    /**
     * List of 1-20 emoji associated with the sticker
     *
     * @var string[]
     */
    protected array $emojiList;

    /**
     * Optional. Position where the mask should be placed on faces. For “mask” stickers only.
     */
    protected ?MaskPosition $maskPosition = null;

    /**
     * Optional. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom_emoji” stickers only.
     *
     * @var string[]
     */
    protected ?array $keywords = null;

    public static function create(
        InputFile|string $sticker,
        array $emojiList,
        ?MaskPosition $maskPosition = null,
        ?array $keywords = null,
    ): self {
        $instance = new self();
        $instance->sticker = $sticker;
        $instance->emojiList = $emojiList;
        $instance->maskPosition = $maskPosition;
        $instance->keywords = $keywords;

        return $instance;
    }
}
