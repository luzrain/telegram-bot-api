<?php

declare(strict_types=1);

namespace Luzrain\TelegramBotApi\Test;

use Composer\Autoload\ClassLoader;
use Luzrain\TelegramBotApi\BaseType;
use Luzrain\TelegramBotApi\StringUtils;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class TypesMapTest extends TestCase
{
    public static function baseTypeClasses(): iterable
    {
        $loaders = ClassLoader::getRegisteredLoaders();
        $loader = array_shift($loaders);
        $classes = array_keys($loader->getClassMap());

        foreach ($classes as $class) {
            if (!str_starts_with($class, 'Luzrain\TelegramBotApi\Types')) {
                continue;
            }
            if (!is_subclass_of($class, BaseType::class)) {
                continue;
            }

            yield [$class];
        }
    }

    #[DataProvider('baseTypeClasses')]
    public function testMapBindings(string $class): void
    {
        $refObject = new \ReflectionClass($class);
        $mapKeys = $this->extractMapKeys($refObject);
        $PropertyKeys = $this->extractPropertyKeys($refObject);

        $this->assertSame($mapKeys, $PropertyKeys, sprintf('%s $map array and properties not match', $class));
    }

    private function extractMapKeys(\ReflectionClass $refObject): array
    {
        $refProperty = $refObject->getProperty('map');
        $map = array_keys($refProperty->getDefaultValue());
        $map = array_map(StringUtils::toCamelCase(...), $map);
        sort($map);

        return $map;
    }

    private function extractPropertyKeys(\ReflectionClass $refObject): array
    {
        $map = array_map(fn (\ReflectionProperty $p) => $p->getName(), $refObject->getProperties());
        foreach (['requiredParams', 'map'] as $deleteProperty) {
            $deleteProperty = array_keys($map, $deleteProperty, true)[0];
            unset($map[$deleteProperty]);
        }
        $map = array_values($map);
        sort($map);

        return $map;
    }
}
