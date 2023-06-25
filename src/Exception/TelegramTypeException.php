<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Exception;

use Luzrain\TelegramBotApi\StringUtils;

final class TelegramTypeException extends \Exception
{
    public function __construct(string $class, array $data, \ReflectionClass $refl, \Throwable $previous)
    {
        $requiredProps = [];
        foreach ($refl->getProperties() as $reflProperty) {
            if ($reflProperty->isPublic() && !$reflProperty->getType()->allowsNull()) {
                $requiredProps[] = StringUtils::toSnakeCase($reflProperty->getName());
            }
        }
        $missingKeys = array_keys(array_diff_key(array_flip($requiredProps), $data));
        parent::__construct(sprintf('%s object creation error. Missing keys: %s', $class, implode(', ', $missingKeys)), 0, $previous);
    }
}
