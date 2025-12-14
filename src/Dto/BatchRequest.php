<?php
declare(strict_types=1);

namespace Survos\Lingua\Contracts\Dto;

/**
 * Minimal request DTO for batching translations.
 *
 * - $source: source locale (e.g. "en")
 * - $target: list of target locales (e.g. ["es","fr"])
 * - $texts: list of input strings
 * - $engine: engine identifier (e.g. "libre")
 * - $insertNewStrings: whether server may create missing Source rows
 * - $forceDispatch: whether server should re-queue even if already translated
 * - $transport: messenger transport name override (optional)
 */
final class BatchRequest
{
    /**
     * @param list<string> $target
     * @param list<string> $texts
     */
    public function __construct(
        public string $source = 'en',
        public array $target = [],
        public array $texts = [],
        public ?string $engine = null,
        public bool $insertNewStrings = true,
        public bool $forceDispatch = false,
        public ?string $transport = null,
    ) {}
}
