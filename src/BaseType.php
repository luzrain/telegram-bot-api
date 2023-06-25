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
            $propertyType = $attributeType?->getArguments()[0] ?? $reflProperty->getType()->getName();
            $isPropertyScalar = $reflProperty->getType()->isBuiltin();

            if (!empty($data[$propertyKey])) {
                $constructorMap[$property] = $isPropertyScalar ? $data[$propertyKey] : $propertyType::fromArray($data[$propertyKey]);
            }
        }

        try {
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
        $reflClass = new \ReflectionClass(static::class);
        $data = [];
        foreach ($reflClass->getProperties() as $reflProperty) {
            if (!$reflProperty->isPublic()) {
                continue;
            }

            $property = $reflProperty->getName();
            $propertyKey = StringUtils::toSnakeCase($property);
            $isPropertyScalar = $reflProperty->getType()->isBuiltin();
            if ($this->$property !== null) {
                if (is_array($this->$property)) {
                    $data[$propertyKey] = array_map(fn ($v) => is_object($v) ? $v->toArray() : $v, $this->$property);
                } else {
                    $data[$propertyKey] = $isPropertyScalar ? $this->$property : $this->$property->toArray();
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
