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
     * Array of required data params for type
     */
    protected static array $requiredParams = [];

    /**
     * Map of input data
     */
    protected static array $map = [];

    protected function __construct()
    {
    }

    /**
     * @internal
     * @throws TelegramTypeException
     */
    public static function fromResponse(array $data): static
    {
        self::validate($data);

        return (new static())->map($data);
    }

    /**
     * @throws TelegramTypeException
     */
    private static function validate(array $data): void
    {
        $requiredKeys = array_flip(static::$requiredParams);
        $intersection = array_intersect_key($requiredKeys, $data);
        if (count($intersection) !== count(static::$requiredParams)) {
            $missingKeys = array_keys(array_diff_key($requiredKeys, $data));
            throw new TelegramTypeException(static::class, $missingKeys);
        }
    }

    private function map(array $data): static
    {
        foreach (static::$map as $key => $item) {
            /** @var BaseType|mixed $item */
            if (isset($data[$key]) && (is_scalar($data[$key]) || !empty($data[$key]))) {
                $property = StringUtils::toCamelCase($key);
                $this->$property = $item === true ? $data[$key] : $item::fromResponse($data[$key]);
            }
        }

        return $this;
    }

    /** @internal */
    public function toArray(): array
    {
        $output = [];
        foreach (static::$map as $key => $item) {
            $property = StringUtils::toCamelCase($key);
            if ($this->$property !== null) {
                if (is_array($this->$property)) {
                    $output[$key] = array_map(fn ($v) => is_object($v) ? $v->toArray() : $v, $this->$property);
                } else {
                    $output[$key] = $item === true ? $this->$property : $this->$property->toArray();
                }
            }
        }

        return $output;
    }

    /** @internal */
    public function jsonSerialize(): mixed
    {
        return $this->toArray();
    }
}
