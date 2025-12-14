<?php
declare(strict_types=1);

namespace Survos\Lingua\Contracts\Http;

/**
 * Wire-level constants for the Lingua HTTP API.
 * Keep this framework-agnostic and stable.
 */
final class LinguaApi
{
    public const ROUTE_BATCH = '/api/lingua/batch';
    public const ROUTE_PULL  = '/api/lingua/pull';

    public const HEADER_API_KEY = 'X-Api-Key';

    public const PARAM_LOCALE = 'locale';
    public const PARAM_ENGINE = 'engine';

    private function __construct() {}
}
