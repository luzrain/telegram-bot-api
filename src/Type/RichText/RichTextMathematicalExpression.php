<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichText;

/**
 * A mathematical expression.
 */
final readonly class RichTextMathematicalExpression extends RichText
{
    public const TYPE = 'mathematical_expression';

    public function __construct(
        /**
         * The expression in LaTeX format
         */
        public string $expression,
    ) {
        parent::__construct(self::TYPE);
    }
}
