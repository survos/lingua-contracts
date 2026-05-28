<?php
declare(strict_types=1);

namespace Survos\Lingua\Contracts\Attribute;

/**
 * Marks a property whose string value should be registered for translation.
 *
 * Consumed by:
 *   - survos/babel-bundle  (entity property-hook storage)
 *   - survos/folio-bundle  (JSON-blob field lookup at postLoad)
 *
 * The marked value is hashed via Survos\Lingua\Core\Identity\HashUtil and
 * pushed to the Lingua server for translation.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
final class Translatable
{
    public function __construct(
        /** Optional disambiguator when identical text means different things in different contexts. */
        public ?string $context = null,
    ) {}
}
