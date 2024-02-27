<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Exception;

use Luzrain\TelegramBotApi\Internal\StringUtils;

final class TelegramTypeException extends \Exception
{
    public static function createExceptionWithMissingKeys(\ReflectionClass $refl, \Throwable $previous, array $data): self
    {
        $requiredProps = [];
        foreach ($refl->getProperties() as $reflProperty) {
            if ($reflProperty->isPublic() && !$reflProperty->getType()->allowsNull()) {
                $requiredProps[] = StringUtils::toSnakeCase($reflProperty->getName());
            }
        }
        $objectName = $refl->getShortName();
        $missingKeys = \implode(', ', \array_keys(\array_diff_key(\array_flip($requiredProps), $data)));
        $message = \sprintf('"%s" object creation error. Missing keys: %s', $objectName, $missingKeys);

        return new self($message, 0, $previous);
    }

    public static function createException(\ReflectionClass $refl, \Throwable $previous): self
    {
        $objectName = $refl->getShortName();
        $reason = $previous->getMessage();
        $message = \sprintf('"%s" object creation error. %s', $objectName, $reason);

        return new self($message, 0, $previous);
    }
}
