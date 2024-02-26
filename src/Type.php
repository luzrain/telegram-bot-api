<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi;

use Luzrain\TelegramBotApi\Exception\TelegramTypeException;

/**
 * Base class for Telegram Types
 *
 * @see https://core.telegram.org/bots/api#available-types
 */
abstract readonly class Type implements \JsonSerializable
{
    /**
     * @internal
     * @throws TelegramTypeException
     * @throws \Exception
     */
    public static function fromArray(array $data): static
    {
        $reflClass = new \ReflectionClass(static::class);
        $constructorMap = [];
        foreach ($reflClass->getConstructor()->getParameters() as $reflParameter) {
            $property = $reflParameter->getName();
            $propertyKey = StringUtils::toSnakeCase($property);

            if (!isset($data[$propertyKey])) {
                continue;
            }

            /** @var ArrayType|null $arrayType */
            $arrayType = ($reflParameter->getAttributes(ArrayType::class)[0] ?? null)?->newInstance();
            if ($arrayType !== null) {
                $constructorMap[$property] = $arrayType->create((array) $data[$propertyKey]);
            } else {
                /** @psalm-suppress UndefinedMethod */
                $propertyType = $reflParameter->getType()->getName();
                $constructorMap[$property] = \is_subclass_of($propertyType, self::class)
                    ? $propertyType::fromArray((array) $data[$propertyKey])
                    : $data[$propertyKey]
                ;
            }
        }

        try {
            /** @psalm-suppress TooManyArguments */
            return new static(...$constructorMap);
        } catch (\ArgumentCountError $e) {
            throw TelegramTypeException::createExceptionWithMissingKeys($reflClass, $e, $data);
        }
    }

    /**
     * @internal
     */
    public function toStdObject(): \stdClass
    {
        $data = new \stdClass();
        foreach ($this as $property => $value) {
            $propertyKey = StringUtils::toSnakeCase($property);
            if ($this->$property !== null) {
                if (\is_array($this->$property)) {
                    $data->$propertyKey = \array_map(fn($value) => $value instanceof self ? $value->toStdObject() : $value, $this->$property);
                } else {
                    $data->$propertyKey = $value instanceof self ? $value->toStdObject() : $this->$property;
                }
            }
        }

        return $data;
    }

    /**
     * @internal
     */
    public function jsonSerialize(): \stdClass
    {
        return $this->toStdObject();
    }
}
