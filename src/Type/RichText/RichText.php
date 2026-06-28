<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

use Luzrain\TelegramBotApi\Type;

/**
 * This object represents a rich formatted text. Currently, it can be either a String for plain text, an Array of RichText, or any of the following types:
 *
 * @see RichTextBold
 * @see RichTextItalic
 * @see RichTextUnderline
 * @see RichTextStrikethrough
 * @see RichTextSpoiler
 * @see RichTextDateTime
 * @see RichTextTextMention
 * @see RichTextSubscript
 * @see RichTextSuperscript
 * @see RichTextMarked
 * @see RichTextCode
 * @see RichTextCustomEmoji
 * @see RichTextMathematicalExpression
 * @see RichTextUrl
 * @see RichTextEmailAddress
 * @see RichTextPhoneNumber
 * @see RichTextBankCardNumber
 * @see RichTextMention
 * @see RichTextHashtag
 * @see RichTextCashtag
 * @see RichTextBotCommand
 * @see RichTextAnchor
 * @see RichTextAnchorLink
 * @see RichTextReference
 * @see RichTextReferenceLink
 */
readonly class RichText extends Type
{
    protected function __construct(
        /**
         * Type of the rich text
         */
        public string $type,
    ) {
    }

    /**
     * @psalm-suppress LessSpecificReturnStatement
     * @psalm-suppress MoreSpecificReturnType
     */
    public static function fromArray(array $data): static
    {
        $instance = parent::fromArray($data);

        return self::class !== static::class ? $instance : match ($instance->type) {
            RichTextBold::TYPE => RichTextBold::fromArray($data),
            RichTextItalic::TYPE => RichTextItalic::fromArray($data),
            RichTextUnderline::TYPE => RichTextUnderline::fromArray($data),
            RichTextStrikethrough::TYPE => RichTextStrikethrough::fromArray($data),
            RichTextSpoiler::TYPE => RichTextSpoiler::fromArray($data),
            RichTextDateTime::TYPE => RichTextDateTime::fromArray($data),
            RichTextTextMention::TYPE => RichTextTextMention::fromArray($data),
            RichTextSubscript::TYPE => RichTextSubscript::fromArray($data),
            RichTextSuperscript::TYPE => RichTextSuperscript::fromArray($data),
            RichTextMarked::TYPE => RichTextMarked::fromArray($data),
            RichTextCode::TYPE => RichTextCode::fromArray($data),
            RichTextCustomEmoji::TYPE => RichTextCustomEmoji::fromArray($data),
            RichTextMathematicalExpression::TYPE => RichTextMathematicalExpression::fromArray($data),
            RichTextUrl::TYPE => RichTextUrl::fromArray($data),
            RichTextEmailAddress::TYPE => RichTextEmailAddress::fromArray($data),
            RichTextPhoneNumber::TYPE => RichTextPhoneNumber::fromArray($data),
            RichTextBankCardNumber::TYPE => RichTextBankCardNumber::fromArray($data),
            RichTextMention::TYPE => RichTextMention::fromArray($data),
            RichTextHashtag::TYPE => RichTextHashtag::fromArray($data),
            RichTextCashtag::TYPE => RichTextCashtag::fromArray($data),
            RichTextBotCommand::TYPE => RichTextBotCommand::fromArray($data),
            RichTextAnchor::TYPE => RichTextAnchor::fromArray($data),
            RichTextAnchorLink::TYPE => RichTextAnchorLink::fromArray($data),
            RichTextReference::TYPE => RichTextReference::fromArray($data),
            RichTextReferenceLink::TYPE => RichTextReferenceLink::fromArray($data),
        };
    }
}
