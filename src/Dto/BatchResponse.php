<?php
declare(strict_types=1);

namespace Survos\Lingua\Contracts\Dto;

/**
 * Minimal response DTO for batching translations.
 *
 * Keep this generic; apps can wrap/extend response semantics outside contracts.
 */
final class BatchResponse
{
    /**
     * @param list<array<string,mixed>> $items
     * @param list<string> $missing
     */
    public function __construct(
        public string $status = 'ok', // ok|queued|error
        public int $queued = 0,
        public array $items = [],
        public array $missing = [],
        public ?string $jobId = null,
    ) {}
}
