<?php

namespace App\Entities\GitHub;

use CodeIgniter\HTTP\URI;

/**
 * URI Trait
 *
 * Provides automated casting of *_url
 * keys to URI.
 */
trait URITrait
{
    /**
     * Intercepts magic access to check for URLs.
     *
     * @return mixed
     */
    public function __get(string $key)
    {
        $result = parent::__get($key);

        if (is_string($result) && is_int(strpos($key, 'url'))) {
            return empty($result) ? null : new URI($result);
        }

        return $result;
    }
}
