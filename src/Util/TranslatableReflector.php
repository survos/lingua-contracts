<?php
declare(strict_types=1);

namespace Survos\Lingua\Contracts\Util;

use Survos\Lingua\Contracts\Attribute\Translatable;

/**
 * Returns the public property names marked #[Translatable] on a class.
 * Pure reflection helper; consumers add their own DI-aware caching if needed.
 */
final class TranslatableReflector
{
    /** @var array<class-string, list<string>> */
    private static array $cache = [];

    /** @return list<string> */
    public static function fieldsFor(string $class): array
    {
        if (isset(self::$cache[$class])) {
            return self::$cache[$class];
        }
        if (!class_exists($class)) {
            return self::$cache[$class] = [];
        }

        $fields = [];
        foreach ((new \ReflectionClass($class))->getProperties(\ReflectionProperty::IS_PUBLIC) as $prop) {
            if ($prop->getAttributes(Translatable::class) !== []) {
                $fields[] = $prop->getName();
            }
        }
        return self::$cache[$class] = $fields;
    }
}
