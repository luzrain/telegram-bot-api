<?php

namespace TelegramBot\Api;

use TelegramBot\Api\Exceptions\InvalidArgumentException;

/**
 * Class BaseType
 * Base class for Telegram Types
 *
 * @package TelegramBot\Api
 */
abstract class BaseType
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
        if (count(array_intersect_key(array_flip(static::$requiredParams), $data)) !== count(static::$requiredParams)) {
            throw new InvalidArgumentException();
        }        
    }

    private function map(array $data): static
    {
        foreach (static::$map as $key => $item) {
            if (isset($data[$key]) && (!is_array($data[$key]) || (is_array($data[$key]) && !empty($data[$key])))) {
                $setter = 'set' . self::toCamelCase($key);
                if ($item === true) {
                    $this->$setter($data[$key]);
                } else {
                    $this->$setter($item::fromResponse($data[$key]));
                }
            }
        }

        return $this;
    }

    private static function toCamelCase(string $str): string
    {
        return str_replace(' ', '', ucwords(str_replace('_', ' ', $str)));
    }

    public function toJson(bool $inner = false): mixed
    {
        $output = [];

        foreach (static::$map as $key => $item) {
            $property = lcfirst(self::toCamelCase($key));
            if ($this->$property !== null) {
                if (is_array($this->$property)) {
                    $output[$key] = array_map(fn ($v) => is_object($v) ? $v->toJson(true) : $v, $this->$property);
                } else {
                    $output[$key] = $item === true ? $this->$property : $this->$property->toJson(true);
                }
            }
        }

        return $inner === false ? json_encode($output) : $output;
    }

    public static function fromResponse(array $data): static
    {
        self::validate($data);

        return (new static())->map($data);
    }
}
