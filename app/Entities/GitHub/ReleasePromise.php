<?php

namespace App\Entities\GitHub;

use Closure;
use CodeIgniter\Entity\Entity;

/**
 * Release Promise Entity
 *
 * Represents a GitHub release in a standardized
 * format from API tags. Because additional info
 * has to be acquired from the commit, this entity
 * works as a lazy-loading promise for the
 * remaining API data.
 *
 * @property string $sha
 */
class ReleasePromise extends Release
{
    private const PROMISED = [
        'author',
        'created_at',
    ];

    /**
     * API call to fetch the additional data.
     *
     * @var Closure|null
     */
    private $resolver;

    /**
     * Stores the resolver along with data.
     */
    public function __construct(?array $data, Closure $resolver)
    {
        parent::__construct($data);

        $this->resolver = $resolver;
    }

    /**
     * Intercepts requests for unloaded data
     * and completes the
     *
     * Examples:
     *  $p = $this->my_property
     *  $p = $this->getMyProperty()
     *
     * @return mixed
     */
    public function __get(string $key)
    {
        if (in_array($key, self::PROMISED, true) && ! array_key_exists($key, $this->attributes) && isset($this->resolver)) {
            $this->fill(($this->resolver)());
            $this->resolver = null;
        }

        return parent::__get($key);
    }
}
