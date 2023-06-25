<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Exception\TelegramTypeException;

/**
 * Base class for Telegram Types
 *
 * @see https://core.telegram.org/bots/api#available-types
 */
abstract class BaseType implements \JsonSerializable
{
    /**
     * @internal
     * @throws TelegramTypeException
     * @throws \Exception
     */
    public static function fromArray(array $data): static
    {
        if (!is_subclass_of(static::class, TypeInterface::class)) {
            throw new \Exception(sprintf('%s should implement %s to perform fromArray method', static::class, TypeInterface::class));
        }

        $reflClass = new \ReflectionClass(static::class);
        $constructorMap = [];
        foreach ($reflClass->getProperties() as $reflProperty) {
            if (!$reflProperty->isPublic()) {
                continue;
            }

            $property = $reflProperty->getName();
            $propertyKey = StringUtils::toSnakeCase($property);
            $attributeType = $reflProperty->getAttributes(PropertyType::class)[0] ?? null;
            /** @psalm-suppress UndefinedMethod */
            $propertyType = $attributeType?->getArguments()[0] ?? $reflProperty->getType()->getName();

            if (isset($data[$propertyKey])) {
                $constructorMap[$property] = is_subclass_of($propertyType, TypeInterface::class)
                    ? $propertyType::fromArray((array) $data[$propertyKey])
                    : $data[$propertyKey]
                ;
            }
        }

        try {
            /** @psalm-suppress TooManyArguments */
            return new static(...$constructorMap);
        } catch (\ArgumentCountError $e) {
            throw new TelegramTypeException(static::class, $data, $reflClass, $e);
        }
    }

    /**
     * @internal
     */
    public function toArray(): array
    {
        $data = [];
        foreach ($this as $property => $value) {
            $propertyKey = StringUtils::toSnakeCase($property);
            if ($this->$property !== null) {
                if (is_array($this->$property)) {
                    $data[$propertyKey] = array_map(fn ($v) => $v instanceof BaseType ? $v->toArray() : $v, $this->$property);
                } else {
                    $data[$propertyKey] = $value instanceof TypeInterface ? $this->$property->toArray() : $this->$property;
                }
            }
        }

        return $data;
    }



    /**
     * @internal
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
