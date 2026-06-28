<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Type\RichBlock;

/**
 * A block with a mathematical expression in LaTeX format, corresponding to the custom HTML tag <tg-math-block>.
 */
final readonly class RichBlockMathematicalExpression extends RichBlock
{
    public const TYPE = 'mathematical_expression';

    public function __construct(
        /**
         * The mathematical expression in LaTeX format
         */
        public string $expression,
    ) {
        parent::__construct(self::TYPE);
    }
}
