<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Internal;

use Luzrain\TelegramBotApi\Type\RichText\RichText;

/**
 * @internal
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_PARAMETER)]
final readonly class RichTextType implements TypeDefinition
{
    /**
     * @return RichText|string|list<RichText|string>
     * @psalm-suppress InvalidReturnType
     */
    public function create(string|array $data): RichText|string|array
    {
        if (\is_string($data)) {
            return $data;
        }

        if (\array_is_list($data)) {
            /** @psalm-suppress InvalidReturnStatement */
            return \array_map(fn(mixed $item): RichText|string|array => $this->create($item), $data);
        }

        return RichText::fromArray($data);
    }
}
