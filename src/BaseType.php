<?php

namespace TelegramBot\Api;

use JsonSerializable;
use TelegramBot\Api\Exceptions\InvalidArgumentException;

/**
 * Base class for Telegram Types
 */
abstract class BaseType implements JsonSerializable
{
    /**
     * Array of required data params for type
     */
    protected static array $requiredParams = [];

    /**
     * Map of input data
     */
    protected static array $map = [];

    /**
     * Validate input data
     *
     * @throws InvalidArgumentException
     */
    private static function validate(array $data): void
    {
        $requiredKeys = array_flip(static::$requiredParams);
        $intersection = array_intersect_key($requiredKeys, $data);
        if (count($intersection) !== count(static::$requiredParams)) {
            $missingKeys = array_keys(array_diff_key($requiredKeys, $data));
            throw new InvalidArgumentException(sprintf('Missing keys: %s', implode(', ', $missingKeys)));
        }
    }

    protected function __construct(array $data)
    {
        foreach (static::$map as $key => $item) {
            if (isset($data[$key]) && (!is_array($data[$key]) || (is_array($data[$key]) && !empty($data[$key])))) {
                $property = self::toCamelCase($key);
                $this->$property = $item === true ? $data[$key] : $item::fromResponse($data[$key]);
            }
        }
    }

    private static function toCamelCase(string $str): string
    {
        return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $str))));
    }

    public function toArray(): array
    {
        $output = [];

        foreach (static::$map as $key => $item) {
            $property = self::toCamelCase($key);
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

    public function jsonSerialize(): mixed
    {
        return $this->toArray();
    }

    public static function fromResponse(array $data): self
    {
        self::validate($data);

        return new static($data);
    }
}
